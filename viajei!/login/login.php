<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login-form.css">
    <title>Login</title>
</head>
<body>
    <section>

        <div class="campo_Login">
        

            <div>
                <h1 class="title_Login">Login</h1>
            </div>
            <br>

            <div>
                <form action="config_login.php" method="POST">
                    <input type="email" name="email" class="inputUser" id="loginEmail" required>
                    <label for="email" class="login_Label">E-mail</label><br><br>

                    <input type="password" name="password" class="inputUser" id="passwordLogin"  required>
                    <label for="password" class="login_Label">Senha</label><br><br>

                    <input type="submit" name="check_in" class="check_in" id="check_in" value="Entrar"><br><br>
                    </fieldset>
                </form>
            </div>
            <p class="p_login">É novo aqui ?</P>
            <div>
                <a href="form.php">
                <input type="submit" name="create_account" class="create_account" id="create_account" value="Crie sua conta">
                </a>
            </div>  
        
        </div>


    </section>
    
</body>
</html>