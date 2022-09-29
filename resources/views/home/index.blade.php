<!DOCTYPE html>
<html lang="en">
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
        Romario APP
    </div>
    <div class="navbar-items">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#about">About</a>
        <a href="#about">Tutoriales</a>
        <a href="#about">Iniciar Sesion</a>
        <a href="/logout">Salir</a>
    </div>
</div>

@auth
    <p class="titulo">Bienvenido {{ auth()->user()->username ?? auth()->user()->username }} estas autenticado en Romario App</p>
@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicie sesion</a></p>
@endguest

<div class="contenedor">
    <form action="{{route('articulos.store')}}" method="POST">
        @csrf
        <h2>Lista de Articulos</h2>
        <div class="create-div">

        <label for="">Rol</label>
        <div class="opcion_rol">
            <input type="radio" id="vendedor" name="user_id" value="1">
            <label for="vendedor">Vendedor</label>
            <input type="radio" id="escritor" name="user_id" value="2">
            <label for="escritor">Escritor</label>
        </div>
            

                <input type="text" name="title" placeholder="Nombre">
                <input type="text" name="description" placeholder="Descripcion">
                <input type="text" name="price" placeholder="Precio">
                <br>    
            <button type="submit">Agregar Articulo</button>
        </div>
    </form>

<!-- LISTA DE ARTICULOS -->
    
    <div class="lista_articulos">
        <h2>Lista de Articulos</h2>
            <table>
                <tr class="tr-articulos">
                    <th>User_id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                    @foreach ($articulos as $articulo)
                <tr>
                    <th>{{$articulo->user_id}}</th>
                    <th>{{$articulo->title}}</th>
                    <th>{{$articulo->description}}</th>
                    <th>{{$articulo->price}}</th>
                    <th><a href="#Editar">Editar</a><a href="#eliminar">Eliminar</a></th>
                </tr>  
                    @endforeach
            </table>
        </div>
    </div>     

<div class='foter'>
    <p>Copyright © 2022 Mejorando dia a dia / Desarrollado por Romario</p>
</div>

</body>
</html>