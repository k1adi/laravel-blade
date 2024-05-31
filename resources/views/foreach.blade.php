<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach Looping</title>
</head>
<body>
    <ul>
        @foreach ($skills as $skill)
            <li> {{$skill}} </li>
        @endforeach
    </ul>
</body>
</html>