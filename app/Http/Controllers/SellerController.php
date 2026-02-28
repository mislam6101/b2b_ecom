<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers = Seller::orderBy('status', 'desc')->get();

        return view('backend.people.seller', compact('sellers'));
    }

    public function dashboard()
    {
        $seller = Auth::guard('seller')->user();
        return view('seller_dashboard', compact('seller'));
    }

    /**
     * Show seller login form
     */
    public function showLoginForm()
    {
        return view('auth.seller_login'); // your seller login Blade
    }

    /**
     * Handle seller login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find seller by email
        $seller = Seller::where('email', $request->email)->first();

        if (!$seller) {
            return back()->withErrors(['email' => 'Email or password is wrong.']);
        }

        // Check if seller is inactive
        if ($seller->status == 0) {
            return back()->with('inactive', true); // <-- use session here
        }

        // Attempt login
        if (Auth::guard('seller')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('seller.dashboard');
        }

        return back()->withErrors(['email' => 'Email or password is wrong.']);
    }

    /**
     * Logout seller
     */
    public function logout(Request $request)
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login');
    }

    /**
     * Update seller status via AJAX
     */
    public function statusUpdate(Request $request)
    {
        $seller = Seller::findOrFail($request->id);
        $seller->status = $request->status;
        $seller->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated'
        ]);
    }
}
