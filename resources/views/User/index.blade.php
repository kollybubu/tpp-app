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
            <a href="{{route('User.create')}}">+create</a>
            <tr>
                @foreach ($User as $data)
                <td>{{$data['id']}}</td>
                <td>{{$data['name']}}</td>
                @foreach ($data->roles as $role)
                <td>{{$role->name}}</td>
                <th>
                            <img src="{{ asset('profile_image/' . $data->profile_image) }}" alt="{{ $data->profile_imagep }}"
                                style="width: 70px; height:70px" />
                        </th>
                @endforeach
                <td><a href="{{route('User.edit',['User' => $data->id])}}">edit</a></td>
            <td> <form action="{{ route('User.destroy', $data->id) }}" method="POST">
                
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form></td>
                @endforeach

            </tr>
        </tbody>
    </table>
@endsection