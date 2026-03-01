<?php

namespace App\Http\Controllers\Auth\Buyer;

use App\Models\Buyer;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.buyer_register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:300'],
            'contact' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Buyer::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $buyer = Buyer::create([
            'company' => $request->company,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('buyer')->login($buyer);

        return redirect(RouteServiceProvider::BUYER_DASHBOARD);
    }
}