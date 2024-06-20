<?php

use App\Http\Controllers\ProductController;

Route::get('/products', function () {
    return view('products');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');