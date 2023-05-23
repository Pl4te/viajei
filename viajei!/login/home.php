<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Silvio Jr</title>
    
</head>
<body>

    <section action ="config_session.php">
        <div>
            <h1>VIAJEI!</h1>
            <br>
            <br>
            <h2>Bem vindo!</h2>
        </div>
    
        <div class="box">
            <form>
            <a href="">Login</a>
            <a href="">Cadastre-se</a>
            <a href="config_session.php" name ="exit" class ="exit" id ="exit">Sair</a>
            </form>
        </div>

        <div>
            
        </div>
    </section>
</body>
</html>