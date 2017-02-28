<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
</head>
<body>
   
   <ul>
    @foreach ($tasks as $task)
        
       <a href="tasks/{{ $task->id }}"><li>{{ $task->body }}</li></a>

    @endforeach
   </ul>
   
</body>
</html>
