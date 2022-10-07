@extends('layouts.app')

@section('content')

<!-- LISTA DE ARTICULOS -->
<div class="vendedor-container">

    <!-- Filtro de Busqueda -->
       <form action="{{ route('articulos.index') }}" method="GET">
            <div class="btn-group">
                <input type="text" name="title" class="form-control" placeholder="Busque un articulo">
                <!-- <input type="text" name="user_id" class="form-control" placeholder="Busque por su user_id"> -->
                <input type="submit" value="Search" class="btn-search">
            </div>
        </form> 

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
                <th>
                    <a class="editar-button" href="{{ url('/articulos/'.$articulo->id.'/edit') }}">Editar</a>
                    <a class="vender-button" href="#eliminar">Vender</a>
                </th>
            </tr>  
            @endforeach 
        </table>
    </div>
</div>
{!! $articulos->links() !!}

@endsection