
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login-form.css">
    <title>Cadastro</title>
    <script>
		function validarSenha() {
			var password = document.getElementById("password").value;
			var confirm_password = document.getElementById("confirm_password").value;
			if (password != confirm_password) {
				alert("As senhas não coincidem. Por favor, tente novamente.");
				return false;
			}
		}
        function mascaraTelefone(telephone) {
			telephone.value = telephone.value.replace(/\D/g, '');
			telephone.value = telephone.value.replace(/^(\d{2})(\d)/g, '($1) $2');
			telephone.value = telephone.value.replace(/(\d)(\d{4})$/, '$1-$2');
		}

    </script>
</head>
<body>

    <section>
    <div class="box">
        <div>
            <a name="come_back" class="come_back" id="come_back" href="login.php">Voltar</a>
        </div>
        <form action="config_register.php" method="POST" onsubmit="return validarSenha();">
            <fieldset>
                <legend class="title_Register"><h1>Cadastro</h1></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="inputName" class="inputUser" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s-]+" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="inputEmail" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telephone" id="inputTelephone" class="inputUser" placeholder="(99) 99999-9999" onkeyup="mascaraTelefone(this);" maxlength="15" required>
                    <label for="text" class="labelInput">Número de contato</label>
                </div>
                <br>
                <div>
                <p>Gênero:</p>
                    <input type="radio" id="feminine" name="gender" value="feminine" required>
                    <label for="feminine">Feminino</label>
                    <input type="radio" id="masculine" name="gender" value="masculine" required>
                    <label for="masculine">Masculino</label>
                    <input type="radio" id="other" name="gender" value="other" required>
                    <label for="feminine">Outros</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <label for="birth_date">Data de nascimento</label>
                    <input type="date" name="birth_date" id="inputBirth_date" class="inputBirth_date" required>
                    
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password" name="password" class="inputUser" id="password" required>
                    <label for="password" class="labelInput">Senha</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password" name="confirm_password" class="inputUser" id="confirm_password" required>
                    <label for="password" class="labelInput">Confirme a senha</label>    
                </div>
                <br>
                <br>
                <div>
                    <input type="submit" name="register" class="register" id="register" value="Registrar">
                </div>
                <br>
            </fieldset>
        </form>

    </div>
    </section>
    
</body>
</html>