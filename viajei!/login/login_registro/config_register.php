<?php

    if (isset($_POST['register'])){
    
        //print_r($_POST['name']);
        //print_r($_POST['email']);
        //print_r($_POST['telephone']);
        //print_r($_POST['gender']);
        //print_r($_POST['birth_date']);
        //print_r($_POST['password']);
        //print_r($_POST['confirm_password']);
    
        include_once('conexao.php');

        $nome_user = $_POST['name'];
        $email_user = $_POST['email'];
        $telefone_user = $_POST['telephone'];
        $genero_user = $_POST['gender'];
        $idade_user = $_POST['birth_date'];
        $senha_user = $_POST['password'];
        $confirmsenha_user = $_POST['confirm_password'];

        $sql = "SELECT * FROM usuarios WHERE email_user = '$email'";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            header('Location: form.php');
            echo "O e-mail" . $email .  "já está cadastrado em nosso banco de dados.";

        } else {
            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_user,email_user,telefone_user,genero_user,idade_user,senha_user,confirmsenha_user) 
            VALUES ('$name', '$email', '$telephone', '$gender', '$birth_date', '$password', '$confirm_password')");
        
            header('Location: login.php');
        }

    }
        
    
?>