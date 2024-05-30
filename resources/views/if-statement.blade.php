<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statement</title>
</head>
<body>
    <p>
        @if(count($skills) == 1)
            I have one skill
        @elseif(count($skills) > 1)
            I have multiple skills
        @else
            I don't have any skills!
        @endif
    </p>
</body>
</html>