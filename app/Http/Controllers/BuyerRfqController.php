<?php

namespace App\Http\Controllers;

use App\Models\Rfq;
use App\Models\RfqReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerRfqController extends Controller
{
    public function index()
    {
        // Buyer এর RFQ ও সেগুলোর seller replies নিয়ে আসা
        $rfqs = Rfq::with('replies.seller')
            ->where('buyer_id', Auth::id())
            ->latest()
            ->get();

        return view('rfq.index', compact('rfqs'));
    }

    public function respond(Request $request, RfqReply $reply)
    {
        $action = $request->input('action');

        if (!in_array($action, ['accepted', 'rejected'])) {
            abort(400);
        }

        $reply->update(['status' => $action]);

        // Optional: seller কে notify করা যাবে

        return redirect()->back()->with('success', 'Your response has been sent to the seller!');
    }
}
