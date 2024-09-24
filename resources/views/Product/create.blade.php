@extends('layouts.master')
@section('content')

<form class="ms-5" action="{{route('products.store')}}" enctype="multipart/form-data" method="POST" >
    @csrf
    <label for="name">name</label>
    <input type="text" name="name">

    <br>
    <label for="description">description</label>
    <input type="text" name="description">
    <br>
    <label for="price">price</label>
    <input type="text" name="price">
    <br>
    <label for="product_image">Image</label>
    <input type="file" name="product_image">
    <br>
    <label for="category">Category</label>
    <select name="category_id" id="">
    @foreach ($category as $category)
    <option value="{{$category->id}}">
        {{$category->name}}
    </option>
    @endforeach
    </select>
    <br>    
    
    <input type="submit" name="btnsubmit" value="Submit">

</form>

@endsection