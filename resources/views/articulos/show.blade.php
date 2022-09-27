<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>Lista de Articulos</h2>
<br>
<a href="">Crear curso</a>
<ul>
  @foreach ($articulos as $articulo)
    <li>{{$articulo->title}}</li>
    <li>{{$articulo->description}}</li>
    <li>{{$articulo->price}}</li>
  @endforeach
  </ul>
  
</body>
</html>