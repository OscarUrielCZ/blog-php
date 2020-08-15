<?php

function init_sessions() {
    if(!isset($_SESSION)) {
        session_start();
    }
}

?>