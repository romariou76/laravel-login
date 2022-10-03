<form action="{{ url('/articulos/'.$articulos->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

<h2>Editar Articulo</h2>
  <div class="create-div">
    <input type="text" name="title" value="{{ $articulos->title }}" placeholder="Nombre" disabled>
    <input type="text" name="description" value="{{ $articulos->description }}" placeholder="Descripcion" disabled>
    <input type="text" name="price" value="{{ $articulos->price }}">
    <!-- <input type="file" name="Foto" value="{{ $articulos->foto }}" id="foto"> -->
     <br>
    <button type="submit" href="/home">Actualizar Articulo</button>
    <a href="/home">Regresar</a>
  </div>
</form>