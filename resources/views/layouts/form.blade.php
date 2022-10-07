<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Editar</title>
</head>
<body>

  <form action="{{ url('/articulos/'.$articulos->id ) }}" method="post" enctype="multipart/form-data">
  @csrf
  {{ method_field('PATCH') }}

  <div class="edit-container">
  <h2>Editar Articulo</h2>

      <label for="">Nombre</label>
      <input type="text" name="title" value="{{ $articulos->title }}" placeholder="Nombre" disabled>
      <label for="">Descripcion</label>
      <input type="text" name="description" value="{{ $articulos->description }}" placeholder="Descripcion" disabled>
      <label for="">Precio</label>
      <input type="text" name="price" value="{{ $articulos->price }}">
      <!-- <input type="file" name="Foto" value="{{ $articulos->foto }}" id="foto"> -->
       <br>
       <br>
      <button type="submit" href="/home">Actualizar Articulo</button>
      <a class="btn-exit" href="/home">Regresar</a>
    </div>
  </form>

</body>
</html>

<style type="text/css" media="screen">

body{
  padding: 0;
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(90deg, rgba(58,0,83,1) 0%, rgba(0,24,142,1) 34%, rgba(255,108,108,1) 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.edit-container{
   
  }

.edit-container{
  width: 250px;
  background-color: white;
  border-radius: 20px;
  padding: 1rem;
}

.edit-container input{
    width: 200px;
    padding: 5px;
    margin: 5px 0px 5px 0px;
    outline: none;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 228, 196, 0.754);
}

.edit-container h2{
    color: rgb(36, 35, 35);
    text-align: center;
}

.edit-container button{
    padding: 10px;
    color: white;
    background-color: rgb(145, 0, 241);
    border: none;
    border-radius: 5px;
    font-weight: bold;
}

.btn-exit{
  padding: 7px;
  color: white;
  background-color: rgb(255, 170, 0);
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 600;
}
</style>