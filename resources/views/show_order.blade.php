<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>

<body>
    <p>Order ID : {{ $order->id }}</p>
    <p>User : {{ $order->user->name }}</p>
    @foreach ($order->transactions as $transaction)
        <p>Product : {{$transaction->product->name}}</p>
        <p>Jumlah : {{$transaction->amount}}</p>
    @endforeach
</body>

</html>