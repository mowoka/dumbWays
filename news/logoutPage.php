<?php
    session_start();
    $_SESSION['email'] = '';
    $_SESSION['id_user'] = '';
    $_SESSION['email'] = '';
    $_SESSION['username'] = '';
    unset($_SESSION['email']);
    unset($_SESSION['id_user']);
    unset($_SESSION['email']);
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: index.php");
?>