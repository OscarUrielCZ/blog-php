<?php

require_once 'includes/connect.php';
require_once 'includes/helpers.php';

if(isset($_POST)) {
    init_sessions();

    $errors = [];
    $username = isset($_POST['username']) ? mysqli_real_escape_string($db, trim($_POST['username'])) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : '';
    
    // data validation
    if(empty($username) || is_numeric($username))
        $errors['username'] = 'El nombre de usuario no es válido';
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['email'] = 'El email no es válido';
    if(empty($password))
        $errors['password'] = 'La contraseña está vacía';

    if(count($errors) == 0) {
        // password cipher
        $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        // $is_secure = password_verify($password, $secure_password);
        
        // insert into database
        $sql = "INSERT INTO users (id, username, email, password, type) VALUES (null, '$username', '$email', '$secure_password', 'normal');";
        $query = mysqli_query($db, $sql);
        
        if($query) {
            // send and email verification and redirect
            header('Location:index.php');
        } else {
            $sql_error = mysqli_error($db);
            if($sql_error == "Duplicate entry '$email' for key 'users.email'")
                $errors['email'] = 'El email ya está previamente registrado';
            else if($sql_error == "Duplicate entry '$username' for key 'users.username'")
                $errors['username'] = 'El nombre de usuario ya está previamente registrado';
            $_SESSION['errors'] = $errors;
        }
    } else {
        $_SESSION['errors'] = $errors;
    }    
}

// var_dump($_SESSION);
$_SESSION['data'] = array('username' => $username, 'email' => $email);
header('Location:register.php');

?>