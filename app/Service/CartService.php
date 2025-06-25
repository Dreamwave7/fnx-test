<?php

namespace App\Service;

use App\Http\Requests\UpdateCartItemRequest;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isTrue;

class CartService
{

    public function addToCart($user = null, $sessionId = null, $product_id, $quantity)
    {
        $idOrSession = $user ? ['user_id' => $user->id] : ["session_id" => $sessionId];

        $cart = Cart::firstOrCreate($idOrSession);
        $cartItem = CartItem::where('cart_id',$cart->id)->where("product_id", $product_id)->first();

        if (!$cartItem)
        {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product_id,
                'quantity' => $quantity
            ]);

        }
        else
        {
            $cartItem->quantity  = $cartItem->quantity + $quantity;
            $cartItem->save();
        }
        return $cartItem;
    }

    public function checkUserCart(Request $request)
    {
        $idOrSession = Auth::user() ? ['user_id' => Auth::user()->id] : ['session_id' => $request->session()->getId()];
        $cartUser = Cart::where($idOrSession)->first();
        if (isset($cartUser))
        {
            return $cartUser;
        }
        else
        {
            return new Cart();
        }
    }

    public function updateCartItem($quantity, CartItem $cartItem)
    {
        $cartItem->quantity = $quantity;
        $cartItem->save();
        return $cartItem;

    }




}
