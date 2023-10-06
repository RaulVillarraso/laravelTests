<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Build</title>
</head>
<body>
    <h1>Introduce your new build</h1>
    <form method="POST" action="{{ route('build') }}">
        {{ csrf_field() }}
        <div>
            <label for="class">Class: </label>
            <input type="text" name="class">
        </div>

        <div>
            <label for="build">Build: </label>
            <input type="text" name="build">
        </div>

        <div>
            <label for="role">Role: </label>
            <input type="text" name="role">
        </div>

        <button type="submit">Add Build</button>

    </form>
</body>
</html>