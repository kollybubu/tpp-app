@extends('layouts.master')
@section('content')

<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        
        <tbody>
            <a href="{{route('role.create')}}">+create</a>
            <tr>
                @foreach ($role as $roles)
                <td>{{$roles->id}}</td>
                <td>{{$roles->name}}</td>
                <td><a href="{{route('role.edit',['role' => $roles->id])}}">edit</a></td>
                <td><form action="{{ route('role.destroy', $roles->id) }}" method="POST">
                
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form></td>
            </tr>
                @endforeach
@endsection