<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- asset es para indicar que se encuentra en un acrpeta publica del proyecto --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">
        @forelse($products as $product)
            <div class="card">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->short_description }}</p>
                <p>{{ $product->price }}USD</p>
                </div>
        @empty
            <h4>No data</h4>
        @endforelse 
    </div>
</body>
</html>