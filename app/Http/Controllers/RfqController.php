<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rfq;
use App\Models\Buyer;
use App\Models\Product;
use App\Models\RfqReply;
use Illuminate\Support\Facades\Auth;

class RfqController extends Controller
{

    public function create($product)
    {
        $product = Product::with('seller')->findOrFail($product);

        $buyer = Auth::guard('buyer')->user();

        return view('rfq.create', compact('product', 'buyer'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'target_price' => 'nullable|numeric|min:0',
            'delivery_date' => 'nullable|date',
            'buyer_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        // Buyer handling (existing or new)
        $buyer = Buyer::firstOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['buyer_name'],
                'company' => $validated['company'] ?? null,
                'contact' => $validated['contact'],
            ]
        );

        // Extras
        $extras = [
            'samples' => $request->has('samples'),
            'certification' => $request->has('certification'),
            'custom_packaging' => $request->has('custom_packaging'),
            'private_label' => $request->has('private_label'),
        ];

        // $productId = $request->input('product_id');
        // if (!$productId) {
        //     return redirect()->back()->with('error', 'Product ID missing!');
        // }
        // RFQ Creation
        Rfq::create([
            'buyer_id' => Auth::guard('buyer')->id(),
            'product_id' => $request->product_id,
            'product_name' => $validated['product_name'],
            'quantity' => $validated['quantity'],
            'target_price' => $validated['target_price'] ?? null,
            'delivery_date' => $validated['delivery_date'] ?? null,
            'message' => $validated['message'] ?? null,
            'extras' => $extras,
        ]);

        return redirect()->back()->with('success', 'কোটেশন অনুরোধ সফলভাবে পাঠানো হয়েছে!');
    }

    // Seller/Admin view
    public function index()
    {
        $sellerId = Auth::guard('seller')->id(); // Login seller ID

        $rfqs = Rfq::with('buyer', 'product')
            ->whereHas('product', function ($q) use ($sellerId) {
                $q->where('seller_id', $sellerId);
            })
            ->latest()
            ->get();

        return view('backend.rfq.index', compact('rfqs'));
    }

    public function sellerIndex()
    {
        $sellerId = Auth::guard('seller')->id(); // Seller login ID

        // Seller-এর product এর RFQ গুলো load করা
        $rfqs = Rfq::with(['buyer', 'product', 'replies'])
            ->whereHas('product', function ($q) use ($sellerId) {
                $q->where('seller_id', $sellerId);
            })
            ->latest()
            ->get();

        return view('backend.rfq.buy_reply', compact('rfqs'));
    }

    public function replyForm($rfqId)
    {
        $rfq = Rfq::with('buyer')->findOrFail($rfqId);

        return view('backend.rfq.reply', compact('rfq'));
    }

    public function submitReply(Request $request, $rfqId)
    {
        $request->validate([
            'message' => 'required|string',
            'quoted_price' => 'required|numeric',
            'delivery_date' => 'required|date',
        ]);

        RfqReply::create([
            'rfq_id' => $rfqId,
            'seller_id' => Auth::guard('seller')->id(),
            'message' => $request->message,
            'quoted_price' => $request->quoted_price,
            'delivery_date' => $request->delivery_date,
            'status' => 'pending',
        ]);

        return redirect()->route('seller.rfqs')
            ->with('success', 'Reply submitted successfully!');
    }
}
