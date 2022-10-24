<?php
    if (isset($_POST['submit'])) {
        include_once('../BD/config.php');

        $name = $_POST['firstname'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $genero = $_POST['genero'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nascimento'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $confirmar = $_POST['confirmar'];

        if (password_verify($confirmar , $senha) == TRUE) {
            $result = mysqli_query($conexao, "INSERT INTO usuario_cand (nome_usuario, email, senha, telefone, genero, cpf, data_nasc, cep, rua, bairro, cidade) VALUES ('$name', '$email','$senha', '$telefone', '$genero', '$cpf', '$data_nasc', '$cep', '$rua', '$bairro', '$cidade')");
            header('location: /login2.php');

        } else {
            header('location: /cadastrocanditato.php');
        }   
    }
?>