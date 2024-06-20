<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = array(
            [
                'name' => 'Iphone11',
                'description' => 'High-end smartphone with advanced features.',
                'price' => 799.99,
            ],
            [
                'name' => 'Wireless Earbuds',
                'description' => 'True wireless earbuds with noise cancellation.',
                'price' => 129.99,
            ],
        );

        return view('products', compact('products'));
    }
}
