<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Registrate</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <div class="form">
            <h1>Registro</h1>
            <label>username</label>
                <input class="input" type="text" name="username">
            <label>Email</label>
                <input class="input" type="email" name="email">
    

            <label for="">Rol</label>
            <br><br>
            <input type="radio" id="vendedor" name="rol" value="1">
            <label for="vendedor">Vendedor</label>
            <input type="radio" id="escritor" name="rol" value="2">
            <label for="escritor">Escritor</label>
<br><br>
            <label>Password</label>
                <input class="input" type="password" name="password">
            <label>Password confirmation</label>
                <input class="input" type="password" name="password_confirmation">
            <button type="submit" value="Registrarse" class="button">Registrarse</button>
            <p>¿Ya tienes una cuenta?<a href="/login">Inicie sesion</a></p>
        </div>
    </form>
</body>
</html>