{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Product</title>
</head>

<body>
    {{-- @foreach ($products as $product) --}}
{{-- <p>Name : {{ $product->name }}</p> --}}
{{-- <p>Description : {{ $product->description }}</p> --}}
{{-- <p>Rp {{ $product->price }}</p> --}}
{{-- <p>Stock : {{ $product->stock }}</p> --}}
{{-- <img src="{{ url('storage/' . $product->image) }}" alt="" height="150px">
        <form action="{{ route('show_product', $product) }}" method="get">
            <button type="submit">Show Details</button>
        </form> --}}

{{-- <form action="{{ route('delete_product', $product) }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Delete product</button>
        </form> --}}
{{-- @endforeach --}}
{{-- </body> --}}

{{-- </html> --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ __('Products') }} </div>

                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3" style="width: 18rem;">
                                <img class="card-img-top" src="{{ url('storage/' . $product->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $product->name }}</p>
                                    <form action="{{ route('show_product', $product) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Show Detail</button>
                                    </form>
                                    @if (Auth::check() && Auth::user()->is_admin)
                                        <form action="{{ route('delete_product', $product) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete Product</button>
                                        </form>
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
