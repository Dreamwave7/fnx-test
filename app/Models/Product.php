<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desctiption',
        'price',
        'image',
        'is_active'
    ];


    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }





}
