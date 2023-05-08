<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show : {{ $product->name }}</title>
</head>

<body>
    <a href="{{ route('index_product') }}">Back to list product</a>
    <p>Name : {{ $product->name }}</p>
    <p>Description : {{ $product->description }}</p>
    <p>Price : Rp {{ $product->price }}</p>
    <p>Stock : {{ $product->stock }}</p>
    <img src="{{ url('storage/' . $product->image) }}" alt="" height="150px">
    <form action="{{ route('edit_product', $product) }}" method="get">
        <button type="submit">Edit Product</button>
    </form>

    <form action="{{ route('add_to_cart', $product) }}" method="post">
        @csrf
        <input type="number" name="amount" id="" value="1">
        <button type="submit">Add to cart</button>

        {{-- memunculkan error --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
    </form>
</body>

</html>
