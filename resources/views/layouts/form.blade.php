<form action="{{ url('/articulos/'.$articulos->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

<h2>Editar Articulo</h2>
  <div class="create-div">
    <label for="">Nombre</label>
    <input type="text" name="title" value="{{ $articulos->title }}" placeholder="Nombre" disabled>
    <label for="">Descripcion</label>
    <input type="text" name="description" value="{{ $articulos->description }}" placeholder="Descripcion" disabled>
    <label for="">Precio</label>
    <input type="text" name="price" value="{{ $articulos->price }}">
    <!-- <input type="file" name="Foto" value="{{ $articulos->foto }}" id="foto"> -->
     <br>
    <button type="submit" href="/home">Actualizar Articulo</button>
    <a href="/home">Regresar</a>
  </div>
</form>