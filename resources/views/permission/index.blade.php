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
            <a href="{{route('permission.create')}}">+create</a>
            <tr>
                @foreach ($permission as $per)
                <td>{{$per->id}}</td>
                <td>{{$per->name}}</td>
                <td><a href="{{route('permission.edit',['permission' => $per->id])}}">edit</a></td>
                <td><form action="{{ route('permission.destroy', $per->id) }}" method="POST">
                
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form></td>    
            </tr>
                @endforeach

@endsection