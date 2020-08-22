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
	<?php
		require_once('includes/header.php');
		require_once('includes/helpers.php');
		init_sessions();
		// var_dump(check_logedin());
	?>
	<div class="container">
		<div class="login-container">
			<div class="login">
				<?php var_dump($_SESSION); ?>
				<h2>Inicia sesión</h2>
				<form action="manage_login.php" method="POST">
					<div class="field-group">
						<label for="username">Nombre de usuario o correo</label>
						<?php if(isset($_SESSION['data']) && isset($_SESSION['data']['username'])): ?>
							<input type="text" name="username" placeholder="Nombre de usuario o correo electronico" value="<?=$_SESSION['data']['username']?>" required/>
						<?php else: ?>
							<input type="text" name="username" placeholder="Nombre de usuario o correo electronico" required/>
						<?php endif; ?>
						<?= show_error('username') ?>
					</div>
					<div class="field-group">
						<label for="password">Contraseña</label>
						<input type="password" name="password" placeholder="Escribe tu contraseña" required/>
						<?= show_error('password') ?>
					</div>
					<input type="submit" value="Entrar">
				</form>
				<span>¿No tienes una cuenta? <a href="register.php">Registrate</a></span>
			</div>
		</div>
	</div>
	<?php
		delete_session('errors');
		delete_session('data');
	?>
</body>
</html>