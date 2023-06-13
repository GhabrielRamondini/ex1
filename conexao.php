<?php
    $host  = 'localhost';
    $user  = 'root';
    $senha = '';
    $banco = 'pi';

    // Conecta ao banco de dados
    $conexao = new mysqli($host, $user, $senha, $banco);

    // Verifica se houve uma solicitação de POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senha = $_POST["senha"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];

        // Insere o usuário no banco de dados usando declarações preparadas
        $sql = "INSERT INTO usuario (email,senha, telefone) VALUES ('$email','$senha', '$telefone')";
        if ($conexao->query($sql) === TRUE){
            echo "Usuário cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar usuário!";
        }
    }
?>
