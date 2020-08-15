<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Marketplace | Ingresar</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h2>Inicia sesión</h2>
            <form action="manage_login.php">
                <label for="username">Nombre de usuario o correo</label>
                <input type="text" name="username" />
                <label for="password">Contraseña</label>
                <input type="password" name="password" />
                <input type="submit" value="Entrar">
            </form>
            <span>¿No tienes una cuenta? <a href="register.php">Registrate</a></span>
        </div>
    </div>
</body>
</html>