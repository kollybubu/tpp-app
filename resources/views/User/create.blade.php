
@extends('layouts.master')
@section('content')

<form action="{{route('User.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
<label for="Name">Name</label>
<input type="text" name="name"/>
<br>
<label for="email">Email</label>
<input type="text"name="email"/>
<br>
<label for="role">Role</label>
<select name="roles[]" id="">
@foreach ($roles as $role)

<option value="{{$role->id}}">{{$role->name}}</option>

@endforeach
</select>
<br>
<label for="profile_image">Image</label>
<input type="file" name="profile_image">
<br>
<label for="password">password</label>
<input type="password" name="password"/>
<br>
<label for="password_confirmation">Confirm password</label>
<input type="text" name="password_confirmation">
<br>
<input type="submit" name="btnsubmit" value="Submit">
</form>

@endsection