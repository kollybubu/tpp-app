<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $product->name }}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" value="{{ $product->description }}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" value="{{ $product->price }}">
    <br>
    <label for="category">category</label>
    <select name="category_id" id="">
        @foreach ($category as $category)
    <option value="{{$category->id}}" @if ($product->category_id = $category->category_id) selected  @endif>
    {{$category->name}}
    </option>
    @endforeach
    </select>
    <input type="submit" name="btnupdate" value="Update">
    <a href="{{ route('product.index') }}">back</a>

</form>
</body>
</html>