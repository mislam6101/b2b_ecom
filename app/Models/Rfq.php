<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'product_id',
        'product_name',
        'quantity',
        'target_price',
        'delivery_date',
        'message',
        'extras'
    ];

    protected $casts = [
        'extras' => 'array', // JSON cast
    ];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); // product_id আছে কি নিশ্চিত হও
    }

    public function replies()
    {
        return $this->hasMany(RfqReply::class);
    }
}
