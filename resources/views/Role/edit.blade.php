@extends('layouts.master')
@section('content')

<form action="{{ route('role.update', $role->id) }}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $role->name }}">
    <br>

        @foreach ($permissions as $permission)
        
        <input type="checkbox" name="permissions[]" value="{{$permission->id}}" {{$role->permissions->contains($permission->id) ? 'checked' : ''}}>
        <label for="">{{$permission->name}}</label>
        @endforeach

    <br>
        <input type="submit" name="btnupdate" value="Update">
    <br>
<a href="{{ route('role.index') }}">back</a>

@endsection