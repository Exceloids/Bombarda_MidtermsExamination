<?php

use App\Http\Controllers\ProductController;

Route::get('/', 'ProductController@index')->name('products.index');
