<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title> @yield('titulo') </title>
</head>
<body>

    <!-- lo que no se va repetir aka estatico -->
    @include('partials.navbar')
    @yield('contenido')

    
</body>
</html>