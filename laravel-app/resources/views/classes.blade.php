<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>
<body>
    <h1>Avaiable classes</h1>
    <div>
    <ul>
        @foreach ($classes as $class)
            <li>{{$class->class}} - {{$class->build}} |{{$class->role}}|</li>
        @endforeach
    </ul>
    </div>
</body>
</html>