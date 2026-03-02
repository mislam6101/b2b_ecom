<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'buyer_id',
        'company',
        'quantity',
        'unit_price',
        'total_amount',
        'delivery_address',
        'special_instructions',
        'status'
    ];

    /**
     * The buyer who placed the order
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    /**
     * The product associated with this order
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
