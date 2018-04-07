<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    @foreach ($name as $names)
        <li>{{$names}}</li>
    @endforeach
</body>
</html>