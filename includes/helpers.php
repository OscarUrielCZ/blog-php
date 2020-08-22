<?php

function init_sessions() {
    if(!isset($_SESSION)) {
        session_start();
    }
}

function show_error($field) {
    if(isset($_SESSION['errors']) && isset($_SESSION['errors'][$field])) {
        $text = $_SESSION['errors'][$field];
        return "<span class='alert alert-error'>$text</span>";
    }
    return '';
}

function delete_session($field) {
    $_SESSION[$field] = null;
    unset($_SESSION[$field]);
}

function check_logedin() {
    // return isset($_SESSION['user']);
    return "Hola";
}

?>