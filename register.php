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
    <?php 
        require_once 'includes/helpers.php';
        init_sessions();
        require_once 'includes/header.php';
    ?>
    <div class="container">
        <div class="login">
            <h2>Registrate</h2>
            <form action="manage_register.php" method="POST">
                <div class="field-group">
                    <label for="username">Nombre de usuario</label>
                    <?php if(isset($_SESSION['data']) && isset($_SESSION['data']['username'])): ?>
                        <?php
                            $username = $_SESSION['data']['username'];
                            echo "<input type='text' name='username' placeholder='Escribe tu nombre de usuario' value='$username' required>";
                        ?>
                    <?php else: ?>
                            <input type="text" name="username" placeholder="Escribe tu nombre de usuario" required>
                    <?php endif; ?>
                    <?php echo show_error('username') ?>
                </div>
                <div class="field-group">
                    <label for="email">Correo electrónico</label>
                    <?php if(isset($_SESSION['data']) && isset($_SESSION['data']['email'])): ?>
                        <?php
                            $email = $_SESSION['data']['email'];
                            echo "<input type='email' name='email' placeholder='example@exmaple.com' value='$email' required>";
                        ?>
                    <?php else: ?>
                        <input type="email" name="email" placeholder="example@exmaple.com" required>
                    <?php endif; ?>
                    <?php echo show_error('email') ?>
                </div>
                <div class="field-group">
                    <labelfor="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Tu contraseña" required>
                    <?php echo show_error('password') ?>
                </div>
                <input type="submit" value="Registrar">
            </form>
            <span>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></span>
        </div>
    </div>
    <?php
        delete_session('errors');
        delete_session('data');
    ?>
</body>
</html>