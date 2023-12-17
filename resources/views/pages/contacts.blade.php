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
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>
    <h1>Contacts</h1>

    <div>
        <ul>
            <li>{{$nome}}</li>
            <li>{{$corso}}</li>

        </ul>
    </div>


</body>

</html>