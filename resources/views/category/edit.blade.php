<form action="{{ route('category.update', $category->id) }}" method="POST">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" value="{{ $category->name }}">
        <input type="submit" name="btnupdate" value="Update">
    <br>
    <a href="{{ route('category.index') }}">back</a>
