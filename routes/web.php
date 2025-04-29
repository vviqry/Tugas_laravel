<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return 'Halaman Produk';
});

Route::get('/cart', function () {
    return 'Halaman Keranjang';
});

Route::get('/checkout', function () {
    return 'Halaman Checkout';
});