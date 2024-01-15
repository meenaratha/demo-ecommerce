<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach($categories as $category)
    <p>{{ $category->sub_category }} - {{ $category->main_category }}</p>
@endforeach --}}



    @foreach($products as $product)
<div class="product">
    <h3>{{ $product->product_name }}</h3>
    <p>{{ $product->quantity }}</p>
    <img src="{{ asset($product->productimage) }}" alt="Product Image" class="img-thumbnail" width="100" height="100">
</div>
<div class="description">
    {{ $product->product_description }}
</div>
@endforeach

</body>
</html>
