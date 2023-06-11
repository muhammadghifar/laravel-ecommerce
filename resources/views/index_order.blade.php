@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Orders') }}</div>

                    <div class="card-body">
                        @foreach ($orders as $order)
                            <div class="card mb-2" style="width: 30rem;">
                                <div class="card-body">
                                    <a href="{{route('show_order', $order)}}">
                                        <h5 class="card-title">Order ID {{$order->id}}</h5>
                                    </a>
                                    <h6 class="card-subtitle mb-2 text-muted">By {{$order->user->name}}</h6>

                                    @if ($order->is_paid == true)
                                        <p class="card-text">Paid</p>
                                    @else
                                        <p class="card-text">Unpaid</p>
                                        @if ($order->payment_receipt)
                                            <div class="d-flex flex-row justify-content-around">
                                                <a href="{{url('storage/' . $order->payment_receipt)}}" class="btn btn-primary">Show payment receipt</a>
                                                <form action="{{route('confirm_payment', $order)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Confirm</button>
                                                </form>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection