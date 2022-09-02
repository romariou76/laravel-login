<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src=""></script>
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/login">Login</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled"
          >Disabled</a
        >
      </div>
    </div>
  </div>
</nav>
    <h1 class="text-center">Pagina principal</h1>
    <!-- directivas de php -->
    @auth
        <!-- recogemos datos del usuario mediante la funcion auth, metodo , propiedad -->
        <p class="text-center">Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estas autenticado a la pagina</p>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem magni nisi quam quas veritatis repellat officiis nulla nesciunt est, animi quae voluptate placeat maiores iusto voluptas optio obcaecati explicabo aliquam?</p>
        <div class="d-flex justify-content-center">
            <a class="btn btn-warning center" href="/logout" role="button">Salir</a>
        </div>

    @endauth

    @guest
        <p>Para ver el contenido <a class="btn btn-primary" href="/login">Inicia sesion</a></p>
    </div>
    </div>
    @endguest
</body>
</html>