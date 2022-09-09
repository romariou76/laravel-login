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
            <label>name</label>
                <input type="text" name="username">
            <label>Email</label>
                <input type="email" name="email">
            <label>Password</label>
                <input type="password" name="password">
            <label>Password confirmation</label>
                <input type="password" name="password_confirmation">
                <button type="submit" value="Registrarse" class="button">Registrarse</button>
        </div>
    </form>
</body>
</html>