<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forelse Looping</title>
</head>
<body>
    <ul>
        @forelse ($skills as $skill)
            <li> {{$skill}} </li>
        @empty
            <li>Doesn't have skills!</li>
        @endforelse
    </ul>
</body>
</html>