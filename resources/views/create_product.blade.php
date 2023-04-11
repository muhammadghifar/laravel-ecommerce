<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Craete Product</title>
</head>

<body>
    <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="" placeholder="Name">
        <br>
        <input type="text" name="description" id="" placeholder="Description">
        <br>
        <input type="number" name="price" id="" placeholder="Price">
        <br>
        <input type="number" name="stock" id="" placeholder="Stock">
        <br>
        <input type="file" name="image" id="">

        <br>
        <button type="submit">Submit Data</button>
    </form>
</body>

</html>
