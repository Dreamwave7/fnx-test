<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use App\Service\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public CartService $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {
        $products = Product::all();
        $cart = $this->cartService->checkUserCart($request);
//        $totalsum =  $cart->getTotalSum();



        return view('products.index',compact('products','cart'));
    }

    public function addToCart(ProductRequest $request)
    {
        $validated = $request->validated();

        $this->cartService->addToCart(
            Auth::user(),
            $request->session()->getId(),
            $validated['product_id'],
            $validated['quantity'],
        );

        return redirect()->back();

    }

    public function updateCartItem(UpdateCartItemRequest $request, CartItem $cartItem)
    {
        $validated = $request->validated();
        $this->cartService->updateCartItem($validated['quantity'], $cartItem);
        return redirect()->back();
    }

    public function removeCartItem(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->back();
    }

    public function removeCart(Cart $cart)
    {
        $cart->delete();
        return redirect()->back();
    }















}
