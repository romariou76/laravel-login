@extends('layouts.app')

@section('content')

<!-- LISTA DE ARTICULOS -->
<div class="vendedor-container">
    <div class="lista_articulos">
        <h2>Lista de Articulos</h2>
        <table>
            <tr class="tr-articulos">
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
                @foreach ($articulos as $articulo)
            <tr>
                <th>{{$articulo->user->username}}</th>
                <th>{{$articulo->title}}</th>
                <th>{{$articulo->description}}</th>
                <th>s/ {{$articulo->price}}</th>
                <th><a href="#Editar">Editar</a><a href="#eliminar">Vender</a></th>
            </tr>  
            @endforeach 
        </table>
    </div>

    <!-- Filtro de Busqueda -->

    <div class="filter-body">
        <form action="" method="GET">
            <div class="btn-group">
                <input type="text" name="busqueda" class="form-control">
                <input type="submit" value="enviar" class="btn btn primary">
            </div>
        </form>
    </div>

</div>


@endsection