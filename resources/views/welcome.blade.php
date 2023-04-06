<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Laravel</title>

</head>

<body class="antialiased">


    @foreach ($fighters as $fighter)
        <p>{{ $fighter->first_name }}</p>
    @endforeach

</body>

</html>
