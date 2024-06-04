<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi - @yield('title')</title>
</head>
<body>
    {{-- Default section for parent --}}
    @section('header')
        <h1>Default Header</h1>
    @show
    @section('content')
        <p>Default Content</p>
    @show

    {{-- Section for child --}}
    @yield('info')
</body>
</html>