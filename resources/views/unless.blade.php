<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unless Statement</title>
</head>
<body>
    {{-- Unless statement is when boolean is falsy, code will be excecute --}}
    <p>
        @unless ($isAdmin)
            Hello User
        @endunless
    </p>
</body>
</html>