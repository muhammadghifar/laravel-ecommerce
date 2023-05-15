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
        <p>
            @if ($order->is_paid == true)
                Paid
            @else
                Unpaid
                @if ($order->payment_receipt)
                    <a href="{{url('storage/' . $order->payment_receipt)}}">Show Payment Receipt</a>
                @endif
                <form action="{{ route('confirm_payment', $order) }}" method="post">
                    @csrf
                    <button type="submit">Confirm Payment</button>
                </form>
            @endif
        </p>
        <form action="{{ route('show_order', $order) }}" method="get">
            <button type="submit">Show Details</button>
        </form>
        <hr>
    @endforeach
</body>

</html>
