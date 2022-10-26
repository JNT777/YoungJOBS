<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '<<SUA SENHA>>';
    $dbName = '<<NOME DO SEU BANCO DE DADOS>>';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
    if ($conexao -> connect_errno){
        echo "Erro";
      } else {
        echo "Sucesso";
      }

?>