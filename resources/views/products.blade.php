<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgets</title>
</head>
<body>
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
</body>
</html>