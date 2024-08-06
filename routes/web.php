<?php

use App\Http\Controllers\PageHeaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/index', function () {
    return view('home.index');
})->name('index');

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
