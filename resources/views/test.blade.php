<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Laravel</title>

</head>

<body class="antialiased">
    {{ dd($training) }}

    <h1>Test2</h1>
</body>

</html>