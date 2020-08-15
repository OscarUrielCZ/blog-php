<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Marketplace | Registrate</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h2>Registrate</h2>
            <form action="manage_register.php" method="POST">
                <label for="username">Nombre de usuario</label>
                <input type="text" name="username" required>
                <label for="email">Correo electrónico</label>
                <input type="text" name="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password" required>
                <input type="submit" value="Registrar">
            </form>
            <span>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></span>
        </div>
    </div>
</body>
</html>