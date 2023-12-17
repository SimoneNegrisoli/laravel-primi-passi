<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world</title>


</head>

<body>
    <header>
        <nav>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contacts') }}">Contacts</a>
        </nav>
    </header>
    <h1>Welcome to Laravell</h1>
    <h2>Hello world</h2>

</body>

</html>