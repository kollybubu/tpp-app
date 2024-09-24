@extends('layouts.master')
@section('content')

<form action="{{ route('permission.update', $permission->id) }}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $permission->name }}">
    <br>
        <input type="submit" name="btnupdate" value="Update">
    <br>
<a href="{{ route('role.index') }}">back</a>

@endsection