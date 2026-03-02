<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function buyerIndex()
    {
        // Authenticated buyer এর order fetch
        $buyerId = Auth::guard('buyer')->id();

        $orders = Order::with('product', 'product.seller')
            ->where('buyer_id', $buyerId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('orders.index', compact('orders'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($product)
    {
        $product = Product::findOrFail($product);
        $buyer = Auth::guard('buyer')->user();

        return view('orders.create', compact('product', 'buyer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buyer = Auth::guard('buyer')->user();

        // ✅ Validation
        $request->validate([
            'seller_id' => 'required|exists:sellers,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'delivery_address' => 'required|string',
            'terms' => 'required|accepted'
        ]);

        // Product fetch
        $product = Product::findOrFail($request->product_id);

        // MOQ check (important for B2B)
        if ($request->quantity < $product->moq) {
            return back()->withErrors([
                'quantity' => 'Minimum Order Quantity is ' . $product->moq
            ])->withInput();
        }

        // Stock check (optional but recommended)
        if ($request->quantity > $product->quantity) {
            return back()->withErrors([
                'quantity' => 'Requested quantity exceeds available stock.'
            ])->withInput();
        }

        // ✅ Secure Price Calculation (never trust hidden input)
        $unitPrice = $product->price;
        $totalAmount = $unitPrice * $request->quantity;

        // ✅ Create Order
        Order::create([
            'product_id' => $product->id,
            'buyer_id' => $buyer->id,
            'seller_id' => $product->seller_id,
            'company' => $buyer->company,
            'quantity' => $request->quantity,
            'unit_price' => $unitPrice,
            'total_amount' => $totalAmount,
            'delivery_address' => $request->delivery_address,
            'special_instructions' => $request->special_instructions,
            'status' => 'pending'
        ]);

        return redirect()->route('buyer.orders')
            ->with('success', 'Order placed successfully!');
    }


    public function sellerOrders()
    {
        $sellerId = auth()->guard('seller')->id();

        $orders = Order::with('product', 'buyer')
            ->where('seller_id', $sellerId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('backend.orders.index', compact('orders'));
    }

    public function updateSellerOrderStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,shipped,completed,cancelled'
        ]);

        if ($order->seller_id !== auth()->guard('seller')->id()) {
            return redirect()->back()->with('error', 'Unauthorized action!');
        }

        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
