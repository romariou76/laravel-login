<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Document</title>
</head>
<body>

<div class="navbar">
    <div class="title">
        <p>Romario Beats</p>
    </div>
    <div class="navbar-items">
        <a href="#home">Home</a>
        <!-- <a href="#news">News</a> -->
        <!-- <a href="#about">About</a> -->
        <!-- <a href="#about">Tutoriales</a> -->
        <!-- <a href="#about">Iniciar Sesion</a> -->
        <a href="/logout">Salir</a>
    </div>
</div>

@auth
    <p class="titulo">Bienvenido {{ auth()->user()->username ?? auth()->user()->username }}</p>
@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicie sesion</a></p>
@endguest

<div class="contenedor">
  @yield('content')
</div>     

<div class='foter'>
    <p>Copyright © 2022 Mejorando dia a dia / Desarrollado por Romario</p>
</div>

</body>
</html>