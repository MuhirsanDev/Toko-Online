<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    // Rute untuk keranjang belanja
    Route::get('/cart', function () {
        return view('home.cart');
    })->name('cart');

    // Rute untuk checkout
    Route::get('/checkout', function () {
        return view('home.checkout');
    })->name('checkout');
});

Route::get('/shop', function () {
    return view('home.shop');
})->name('shop');

Route::get('/shop-detail', function () {
    return view('home.shop-detail');
})->name('shop.detail');

Route::get('/testimonial', function () {
    return view('home.testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/add-products', function () {
    return view('dashboard.add-products');
})->name('add-products');

Route::post('/add-products', [ProductController::class, 'store']);

Route::get('/category-products', function () {
    return view('dashboard.category-products');
})->name('category-products');

Route::post('category-products', [CategoryController::class, 'store']);