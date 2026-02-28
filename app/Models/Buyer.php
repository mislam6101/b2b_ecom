<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Buyer extends Authenticatable
{
    use HasFactory;

    protected $guard = 'buyer';

    protected $fillable = [
        'company',
        'address',
        'contact',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}