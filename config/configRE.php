<?php
    if (isset($_POST['submit'])) {
        include_once('../BD/config.php');

        $name = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $cnpj = $_POST['cnpj'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $confirmar = $_POST['confirmar'];

        if (password_verify($confirmar , $senha) == TRUE) {
            $result = mysqli_query($conexao, "INSERT INTO usuario_empre (nome_usuario, email, senha, telefone, cnpj, cep, rua, bairro) VALUES ('$name', '$email','$senha', '$telefone', '$cnpj', '$cep', '$rua', '$bairro')");
            header('location: /login2.php');


        } else {
            header('location: /cadastroempresa.php');
            echo("'$name', '$email','$senha', '$telefone', '$cnpj', '$cep', '$rua', '$bairro'");
        }   
    }
?>