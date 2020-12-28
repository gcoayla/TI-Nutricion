<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" id="EstilosPrin">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,300;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- React root DOM -->
    @yield('content')

    <!-- React JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/func1.js') }}"></script>
</body>
</html>
