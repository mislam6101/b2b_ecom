<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfqReply extends Model
{
    protected $fillable = ['rfq_id', 'seller_id', 'message', 'quoted_price', 'delivery_date', 'status'];

    public function rfq()
    {
        return $this->belongsTo(Rfq::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
