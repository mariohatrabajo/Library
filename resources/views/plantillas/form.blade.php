<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca | @yield('titulo')</title>
        <link rel="icon" href="../../assets/icons/bookmark.svg">
        <link rel="stylesheet" type="text/css" href="../../assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/laravel_version.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/edit.css">
        <meta charset="UTF-8">
    </head>
    <body>
            <header>
                @yield('volver')
            </header>

            <h1>@yield('titulo')</h1>

            @yield('form')
    </body>
</html>