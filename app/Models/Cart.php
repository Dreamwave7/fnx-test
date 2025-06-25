<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id'
    ];

    public function user()
    {
         return $this->belongsTo(User::class);

    }

    public function cartItem()
    {
         return $this->hasMany(CartItem::class);
    }

    public function getTotalSum()
    {
        $total = 0;

        $itemsCart = $this->cartItem;
        foreach ($itemsCart as $item)
        {
            $sum = $item->quantity * $item->product->price;
            $total += $sum;
        }

        return $total;
    }











}
