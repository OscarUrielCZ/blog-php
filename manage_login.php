<?php

require_once 'includes/connect.php';
require_once 'includes/helpers.php';

if($_POST) {
    init_sessions();

    $errors = [];
    $username = isset($_POST['username']) ? mysqli_real_escape_string($db, $_POST['username']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : '';

    // data validation
    if(empty($username) || is_numeric($username))
        $errors['username'] = 'El nombre de usuario no es válido';
    if(empty($password))
        $errors['password'] = 'La contraseña está vacía';

    
}

?>