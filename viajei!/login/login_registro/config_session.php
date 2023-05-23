<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    session_start();        
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
?>