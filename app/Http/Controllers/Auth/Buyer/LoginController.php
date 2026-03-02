<?php

namespace App\Http\Controllers\Auth\Buyer;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.buyer_login');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('buyer')->validate([
            'email' => $request->email,
            'password' => $request->password,
        ])) {

            $buyer = Buyer::where('email', $request->email)->first();
            Auth::guard('buyer')->login($buyer);

            $redirect = $request->input('redirect');

            if ($redirect) {
                return redirect($redirect);
            }

            return redirect()->intended(RouteServiceProvider::BUYER_DASHBOARD);
        }

        return back()
            ->withInput()
            ->with('error', 'Email or Password is incorrect.');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('buyer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
