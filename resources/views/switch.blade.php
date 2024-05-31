<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statement</title>
</head>
<body>
    @switch($score)
        @case(90)
            <p>Excellent</p>
            @break
        @case(80)
            <p>Nice</p>
            @break
        @default
            <p>Good</p>
    @endswitch
</body>
</html>