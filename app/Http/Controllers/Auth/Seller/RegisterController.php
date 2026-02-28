<?php

namespace App\Http\Controllers\Auth\Seller;

use App\Models\Seller;
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
        return view('auth.seller_register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'company' => 'required|string|max:100',
            'address' => 'required|string|max:300',
            'contact' => 'nullable|string|max:30',
            't_license' => 'nullable|string|max:100',
            'email' => 'required|email|unique:sellers,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $seller = Seller::create($request->all());

        return redirect()->route('seller.login')->with('success', 'Registration successful! Please wait for varification.');
    }

}