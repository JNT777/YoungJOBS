<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cand.css">
    <title>YoungJOBS</title>
</head>
<body>
    <div class="background-roxo">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="index.php"><img src="img/logo_fundo preto_preview_rev_1.png" alt="logo site" width="100%" height="100%"> </a>
                    </div>
                    <ul class="ul ativo">
                        <li> <a href="index.php"> Home </a></li>
                        <li> <a href="login2.php"> Login </a></li>
                        <li> <a href="vagas_nova.php"> Vagas </a></li>
                        <li> <a href="#"></a></li>
                        <li> <a href="#"></a></li>
                    </ul>
                    <div class="menu-icon">
                        <img src="img/menu.png" alt="icone de menu">
                    </div>
                </nav>
            </div>
        </header>


    <div class="containers">
        <div class="form-image">
        <div class="form">
            <form action="/config/configR.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro do Candidato(a)</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login2.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Completo:</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu emai aqui" name="email">
                    </div>

                    <div class="input-box">
                    <label for="number">Telefone:</label>
                    <input type="text" class="form-control phone-ddd-mask" placeholder="Ex.: (00) 0000-0000" name="telefone">
                </div>

                    <div class="input-box">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha:</label>
                        <input id="confirmPassword" type="password" name="confirmar" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero:</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gendero">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gendero">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gendero">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gendero">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <br>
                <div class="input-box">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control cpf-mask" name="cpf" placeholder="Ex.: 000.000.000-00">
                </div>

            <div class="input-box">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input id="data_nascimento" type="date" name="data_nascimento" required>
                </div>

                <div class="input-box">
                    <label for="cep">CEP:</label>
                    <input type="text" class="form-control cep-mask" name="cep" placeholder="Ex.: 00000-000">
                </div>

                <div class="input-box">
                    <label for="rua">Rua/Número:</label>
                    <input id="rua" type="text" name="rua" placeholder="Digite o nome da rua e o número de onde mora " required>
                    </div>

                <div class="input-box">
                    <label for="bairro">Bairro:</label>
                    <input id="bairro" type="text" name="bairro" placeholder="Digite o nome do bairro onde mora" required>
                    </div>

                    <div class="input-box">
                    <label for="bairro">Cidade:</label>
                    <input id="cidade" type="text" name="cidade" placeholder="Digite o nome da cidade onde mora" required>
                    </div>

                
                
                <div class="reset-button" type="reset">           
                <button>Redefinir</button>
            </div>  

                <div class="continue-button" >
                    <button name="submit" type="submit">Enviar</button>
                </div>

            </form>
        </div>
    </div>
</div>

   <script src="JS/maint.js"></script>
</body>

</html>