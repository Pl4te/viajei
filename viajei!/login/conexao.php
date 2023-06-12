<?php

    $dbHost = 'ep-patient-shadow-166198-pooler.us-east-1.postgres.vercel-storage.com';
    $dbUsername = 'default';
    $dbPassword= 'vQrPNV9lheZ3';
    $dbName = 'verceldb';

    $conexao = pg_connect("host=$dbHost port=5432 dbname=$dbName user=$dbUsername password=$dbPassword") or die("Falha ao se conectar");
    
    return true;

   

?>
