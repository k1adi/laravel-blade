<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disabled Blade Template</title>
</head>
<body>
    <h1>Halaman @{{ $page }}</h1>

    @verbatim
        <p> Selamat {{ $greeting }}! </p>
        <p> Hello {{ $name }} </p>
    @endverbatim
</body>
</html>