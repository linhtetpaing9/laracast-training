<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    @foreach ($tasks as $task)
        <li>{{$task->body}}</li>
    @endforeach
</body>
</html>