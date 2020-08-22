<?php

require_once 'includes/connect.php';
require_once 'includes/helpers.php';

if($_POST) {
	init_sessions();

	$errors = [];
	$username = isset($_POST['username']) ? mysqli_real_escape_string($db, trim($_POST['username'])) : '';
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : '';

	// data validation
	if(empty($username) || is_numeric($username))
		$errors['username'] = 'El nombre de usuario no es válido';
	if(empty($password))
		$errors['password'] = 'La contraseña está vacía';

	if(empty($errors)) {
		$sql = "SELECT * FROM users WHERE username = '$username';";
		$query_result = mysqli_query($db, $sql);

		if(mysqli_num_rows($query_result) == 1) {
			$user = mysqli_fetch_assoc($query_result);   
			if(password_verify($password, $user['password'])) {
				$_SESSION['user'] = $user;
				header('Location:index.php');
				return;	
			} else {
				$errors['password'] = 'Contraseña incorrecta';
			}
		} else {
			$errors['username'] = 'Nombre de usuario incorrecto';
		}
	}

	$_SESSION['errors'] = $errors;
	$_SESSION['data'] = ['username' => $username];
}

header('Location:login.php');

?>