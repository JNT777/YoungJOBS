<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = 'Mysqlpatez123.';
    $dbName = 'young_jobs';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);
    if ($conexao -> connect_errno){
        echo "Erro";
      } else {
        echo "Sucesso";
      }

?>