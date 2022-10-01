@extends('layouts.app')

@section('content')

<form action="{{route('articulos.store')}}" method="POST">
        @csrf
        <h2>Agregar Articulo</h2>
            <div class="create-div">
                
                <input type="text" name="title" placeholder="Nombre">
                <input type="text" name="description" placeholder="Descripcion">
                <!-- <input type="text" name="price" placeholder="Precio"> -->
                 <br>    
                <button type="submit">Agregar Articulo</button>
            </div>
    </form>

<!-- LISTA DE ARTICULOS -->
    
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
                    <th>s/{{$articulo->price}}</th>
                    <td>
                        <a class="editar-button" href="#Editar">Editar</a>
                        <form action="{{ url('/articulos/'.$articulo->id ) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="eliminar-button" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                        </form>
                    </td>
                </tr>  
                    @endforeach 
            </table>
        </div>

@endsection