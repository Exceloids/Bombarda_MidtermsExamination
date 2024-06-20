<!-- resources/views/products/index.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <h1>Gadgets</h1>
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product['name'] }}</strong>
                    <p>{{ $product['description'] }}</p>
                    <span>Price: ${{ $product['price'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
