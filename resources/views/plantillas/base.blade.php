<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca | @yield('titulo')</title>
        <link rel="icon" href="assets/icons/bookmark.svg">
        <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="assets/css/laravel_version.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/laravel_version.css">
        <meta charset="UTF-8">
    </head>
    <body>
            <header>
                <a href="{{route('libros')}}">Libros</a>
                <a href="{{route('autores')}}">Autores</a>
                <a href="{{route('usuarios')}}">Usuarios</a>
                <a href="{{route('alquileres')}}">Alquileres</a>
            </header>

            <h1>@yield('titulo')</h1>

            @yield('btn-busqueda')
            
            @yield('tabla')
    </body>
</html>