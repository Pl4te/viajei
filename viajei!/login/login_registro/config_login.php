<?php

    session_start();    

    //print_r($_REQUEST);
    if(isset($_POST['check_in']) && !empty($_POST['email']) && !empty($_POST['email']))
    {
        include_once('conexao.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        //print_r('email: ' . $email);
        //print_r('password: ' . $password);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";

        $result = $conexao->query($sql);

        //print_r($sql);
        //print_r($result);


        if(mysqli_num_rows($result) < 1){
            
            
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }
        else{

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: home.php');
            
        }

    }
    else
    {   

        header('Location : login.php');

    }

    


?>