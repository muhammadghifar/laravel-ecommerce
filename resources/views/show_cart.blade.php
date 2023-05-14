<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>

<body>
    {{-- memunculkan error --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @foreach ($carts as $cart)
        <img src="{{ url('storage/' . $cart->product->image) }}" alt="" height="100px">
        <p>Name: {{ $cart->product->name }}</p>
        <p>Jumlah : {{ $cart->amount }}</p>
        <br>
        <form action="{{ route('update_cart', $cart) }}" method="post">
            @method('patch')
            @csrf
            <input type="number" name="amount" id="" value="{{ $cart->amount }}">
            <button type="submit">Update jumlah</button>
        </form>
        <form action="{{ route('delete_cart', $cart) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete</button>
        </form>
        <hr>
    @endforeach

    <form action="{{ route('checkout') }}" method="post">
        @csrf
        <button type="submit">Checkout</button>
    </form>
    
    <hr>
    {{-- <form action="{{route('index_product')}}" method="get">
        <button type="submit">Back to Product</button>
    </form> --}}
</body>

</html>
