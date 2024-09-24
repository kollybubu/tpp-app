@extends('layouts.master')
@section('content')
    <a href="{{ route('category.create')}}">+create</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                @foreach ($categories as $data)
                <td>{{$data['id']}}</td>
                <td>{{$data['name']}}</td>
                <td><a href="{{route('category.edit', ['id' => $data->id])}}">edit</a></td>
                <td><form action="{{ route('category.delete', $data->id) }}" method="POST">
                                @csrf
                                <button>Delete</button>
                            </form></td>
                @endforeach
            </tr>
        </tbody>
    </table>
    @endsection
