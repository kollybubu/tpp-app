@extends('layouts.master')
@section('content')

<form class="ms-5" action="{{route('permission.store')}}" method="POST">

    @csrf
    <label for="name">name</label>
    <input type="text" name="name">
    <input type="submit" name="btnsubmit" value="Submit">



@endsection