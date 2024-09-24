@extends('layouts.master')
@section('content')
<!-- <form action="{{ route('product.index') }}"> -->
    <div class="m-5">
        <div>
    @foreach ($products as $product)
    {{$product['name']}}
    <br>
    {{$product['description']}}
    <br>
    {{$product['price']}}
    <br>
    <img src="{{ asset('product_image/' . $product->product_image) }}" alt="{{ $product->product_image }}"
                                style="width: 70px; height:70px" />
     @can('productedit')<a href="{{route('products.edit', ['id' => $product->id])}}">edit</a> @endcan
     @can('productdelete')
    <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                <button>Delete</button>
                            </form>
                            @endcan
     @endforeach
     @can('productCreate')
    <a href="{{route('products.create')}}">+create</a>
    @endcan
         </div>
    </div>
    <!-- </form> -->
@endsection