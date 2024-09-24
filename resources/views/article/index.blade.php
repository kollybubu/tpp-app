<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>

<h1>article category</h1>
    @foreach ($article as $result)
    <p> {{$result['article name']}}</p>
    @endforeach
    </div>
</body>
</html>