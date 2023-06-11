@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Product') }}</div>

                    <div class="card-body">
                        <form action="{{route('store_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="Name">
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" id="" class="form-control" placeholder="Description">
                            </div>
                            
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" id="" class="form-control" placeholder="Price">
                            </div>
                            
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text" name="stock" id="" class="form-control" placeholder="Stock">
                            </div>
                            
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
