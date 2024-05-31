<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include Blade</title>
</head>
<body>
    @include('header', [
        'description' => 'Lorem ipsum dolor sit amet'
    ]);

    <p>Selamat Datang!</p>
</body>
</html>