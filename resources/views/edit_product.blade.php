<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $product->name }}</title>
</head>

<body>
    <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <label for="">Name</label>
        <br>
        <input type="text" name="name" id="" value="{{ $product->name }}">
        <br>
        <label for="">Description</label>
        <br>
        <input type="text" name="description" id="" value="{{ $product->description }}">
        <br>
        <label for="">Price</label>
        <br>
        <input type="number" name="price" id="" value={{ $product->price }}>
        <br>
        <label for="">Stock</label>
        <br>
        <input type="number" name="stock" id="" value={{ $product->stock }}>
        <br>
        <label for="">Image</label>
        <br>
        <input type="file" name="image" id="">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
