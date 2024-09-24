<form action="{{ route('User.update', $User->id) }}" method="POST">
    {{method_field('PUT')}}
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $User->name }}">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" value="{{$User->email}}" readonly>
    <br>
    <label for="image">Image</label> <br>
    <img src="{{ asset('profile_image/' . $User->profile_image) }}" alt="{{ $User   ->profile_imagep }}"
    style="width: 70px; height:70px" />
    <br>
    <label for="role">Role</label>
    <select name="roles[]" id="">
        @foreach ($roles as $role)
        <option value="{{$role->id}}" {{$User->roles->contains($role->id) ? 'selected' : ""}} > 
            {{$role->name}}
        </option>
        @endforeach
    </select>
    <br>
        <input type="submit" name="btnupdate" value="Update">
    <br>
<a href="{{ route('User.index') }}">back</a>
