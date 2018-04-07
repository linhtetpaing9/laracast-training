<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    @foreach ($tasks as $task)
        <li>
        	<a href="/tasks/{{ $task->id }}">
        		{{$task->body}}
        	</a>
        </li>
    @endforeach
</body>
</html>