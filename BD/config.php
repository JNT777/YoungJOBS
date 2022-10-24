<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '@robodoido13';
    $dbName = 'bdtcc';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
    if ($conexao -> connect_errno){
        echo "Erro";
      } else {
        echo "Sucesso";
      }

?>