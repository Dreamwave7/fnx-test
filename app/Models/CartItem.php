<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];


    public function cart()
    {
        $this->belongsTo(Cart::class);
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
