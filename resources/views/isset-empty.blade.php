<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isset Empty</title>
</head>
<body>
    @isset($name)
        <p>Hello my name is, {{$name}}</p>
    @endisset

    @empty($skills)
        <p>I have no skills!</p>
    @endempty
</body>
</html>