<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>
</head>

<body>
    @foreach ($products as $product)
        <p>Name : {{ $product->name }}</p>
        {{-- <p>Description : {{ $product->description }}</p> --}}
        <p>Rp {{ $product->price }}</p>
        {{-- <p>Stock : {{ $product->stock }}</p> --}}
        <img src="{{ url('storage/' . $product->image) }}" alt="" height="150px">
        <form action="{{ route('show_product', $product) }}" method="get">
            <button type="submit">Show Details</button>
        </form>

        <form action="{{ route('delete_product', $product) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete product</button>
        </form>
    @endforeach
</body>

</html>
