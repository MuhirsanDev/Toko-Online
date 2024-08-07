<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
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

Route::get('/shop', function () {
    return view('home.shop');
})->name('shop');

Route::get('/shop-detail', function () {
    return view('home.shop-detail');
})->name('shop.detail');

Route::get('/cart', function () {
    return view('home.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('home.checkout');
})->name('checkout');

Route::get('/testimonial', function () {
    return view('home.testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');