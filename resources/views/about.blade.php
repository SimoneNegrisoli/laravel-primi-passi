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
            <a href="{{ route('contacts') }}">Contacts</a>
        </nav>
    </header>
    <h1>about</h1>

    <div>
        <ul>
            <li>{{$nome}}</li>
            <li>{{$eta}}</li>
            <li>{{$classe}}</li>
        </ul>
    </div>
    <div>
        <ul>
            @foreach($colors as $color)
            <li>{{$color}}</li>
            @endforeach
        </ul>
    </div>


</body>

</html>