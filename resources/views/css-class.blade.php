<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Class</title>

    <style>
        .red{ color: red; }
        .green{ color: green; }
        .blue{ color: blue; }
        .yellow{ color: yellow; }
        .bold{ font-weight: bold; }
    </style>
</head>
<body>
    <ul>
        @foreach ($skills as $skill)
            <li @class([ 'red', 'bold' => $skill['love']])> {{ $skill['name'] }} </li>
        @endforeach
    </ul>
</body>
</html>