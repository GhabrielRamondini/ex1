<?php

include('conexao.php');

if (isset($_POST['login']) && isset($_POST['email'])){

    $email = mysqli_real_escape_string($conexao, $_POST['login']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE email='$email' AND senha= '$senha' ";

    $resultado = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($resultado) > 0) {
        echo "Login realizado com sucesso";
        //header("Location:login-pesquisar.php");
    } else {
        echo "Login ou senha incorretos";
    }
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="sla">
        <form method="post" action="">
            <label for="login">E-mail:</label>
            <input type="text" id="login" name="login">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha">

            <button type="submit">Entrar</button>

          
        </form>
    </div>

    
</body>
</html>
