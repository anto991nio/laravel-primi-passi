<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<body>
    <h1>Welcome to my home page {{$name}} {{$surname}}</h1>
    <h2>Choose which page you want to visit</h2>
    <nav>
        <ul>
        <li><a href="{{route('home')}}">HOME</a></li>
        <li><a href="{{route('contacts')}}">CONTACTS</a></li>
        </ul>
    </nav>
</body>
</html>