<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cart;
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
        $this->cartService->checkUserCart($request);


        return view('products.index',compact('products'));
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















}
