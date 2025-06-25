<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index',[ProductController::class,'index'])->name('product.index');

Route::post('/cart/add',[ProductController::class,'addToCart'])->name('cart.store');

Route::patch('/cart/{cartItem}',[ProductController::class,'updateCartItem'])->name('cart.update');

Route::delete('/cart/{cartItem}',[ProductController::class,'removeCartItem'])->name('cart.remove');

Route::delete('/cart/{cart}/all',[ProductController::class,'removeCart'])->name('cart.all.remove');


