<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>

<body>
    @foreach ($orders as $order)
        <p>Order ID : {{ $order->id }}</p>
        <p>User : {{ $order->user->name }}</p>
        <p>timestamps : {{ $order->created_at }}</p>
        <hr>
    @endforeach
</body>

</html>