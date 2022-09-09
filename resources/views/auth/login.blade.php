<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <div class="form">
            <h1>Login</h1>
            <label>Username/Email</label>
                <input type="text" name="username" id="">
            <label>Password</label>
                <input type="password" name="password" id="">
            <button type="submit" value="Login">Ingresar</button>
            <p>¿no tienes una cuenta?<a href="/register"> registrate aqui</a></p>

    </form>
</body>
</html>