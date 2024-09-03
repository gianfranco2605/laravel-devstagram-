<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - @yield('titulo')</title>
        @vite('resources/css/app.css')



    </head>
    <body>
        <nav>
            <a href="/nosotros">Nosotros</a>
            <a href="/">Tienda</a>
        </nav>
        <h1 class="" >@yield('titulo')</h1>
        <hr>

        @yield('contenido')
    </body>
</html>
