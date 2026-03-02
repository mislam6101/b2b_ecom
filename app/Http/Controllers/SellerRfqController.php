<?php

namespace App\Http\Controllers;

use App\Models\Rfq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerRfqController extends Controller
{
    public function index()
    {
        $rfqs = Rfq::with('replies')->latest()->get();
        return view('seller.rfqs', compact('rfqs'));
    }

    public function show(Rfq $rfq)
    {
        return view('seller.rfq_show', compact('rfq'));
    }

    public function reply(Request $request, Rfq $rfq)
    {
        $validated = $request->validate([
            'message' => 'required|string',
            'quoted_price' => 'nullable|numeric|min:0',
            'delivery_date' => 'nullable|date',
        ]);

        $rfq->replies()->create([
            'seller_id' => Auth::id(),
            'message' => $validated['message'],
            'quoted_price' => $validated['quoted_price'] ?? null,
            'delivery_date' => $validated['delivery_date'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Reply sent to buyer!');
    }
}
