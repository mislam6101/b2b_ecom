<?php

namespace App\Http\Controllers\Auth\Seller;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.seller_login');
    }

    // In Seller LoginController or wherever you handle login
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $seller = Seller::where('email', $request->email)->first();

    //     if ($seller && $seller->status == 0) {
    //         return back()->withErrors([
    //             'email' => 'Your account has not been verified by admin.',
    //         ]);
    //     }

    //     if (Auth::guard('seller')->attempt($credentials, $request->filled('remember'))) {
    //         return redirect()->intended(route('seller.dashboard'));
    //     }

    //     return back()->withErrors(['email' => 'Invalid credentials.']);
    // }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check credentials first
        if (Auth::guard('seller')->validate([
            'email' => $request->email,
            'password' => $request->password,
        ])) {

            $seller = Seller::where('email', $request->email)->first();

            // Inactive account → block + flash message
            if ($seller->status == 0) {
                return back()->with('inactive', true);
            }

            // Active → login
            Auth::guard('seller')->login($seller);

            return redirect()->intended(RouteServiceProvider::SELLER_DASHBOARD);
        }

        return back()
            ->withInput()
            ->with('error', 'Email or Password is incorrect.');
    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('seller')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
