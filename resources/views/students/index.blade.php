<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>welcome php</h1>
        <h1>student</h1>
        @foreach ($student as $result)
        <p>{{ $result['name']}}</p>
        @endforeach
    </div>
</body>
</html>