<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'name',
        'sku',
        'short_description',
        'description',
        'price',
        'discount_price',
        'quantity',
        'moq',
        'image',
        'status',
    ];


    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function rfqs()
    {
        return $this->hasMany(Rfq::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
