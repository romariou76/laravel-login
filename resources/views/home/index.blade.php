@extends('layouts.app')

@section('content')

<!-- Incluimos el formulario de creacion -->

<form action="{{route('articulos.store')}}" method="POST">
@csrf
    <div class="create-div">    
        <h2>Agregar Articulo</h2>
        <input type="text" name="title" placeholder="Nombre">
        <input type="text" name="description" placeholder="Descripcion">
        <input type="text" name="price" placeholder="Precio" disabled>
        <br>    
        <button type="submit">Agregar Articulo</button>
    </div>
</form>

<!-- LISTA DE ARTICULOS -->
    
<div class="lista_articulos">
    <h2>Lista de Articulos del Escritor {{ auth()->user()->username ?? auth()->user()->username }}</h2>
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
            <th>s/{{$articulo->price}}</th>
            <th class="acciones-div">
                <a class="editar-button" href="{{ url('/articulos/'.$articulo->id.'/edit') }}">Editar</a>
                <form action="{{ url('/articulos/'.$articulo->id ) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="eliminar-button" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </th>
        </tr>  
        @endforeach 
    </table>
</div>

@endsection