<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword= 'root';
    $dbName = 'formulario_cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno) {

        echo "Falha ao se conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   }
   else
   echo "conectado"



?>
