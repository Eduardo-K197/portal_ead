<?php

$servidor = "localhost";
$usuario = "admin";
$senha = "353331499Eduardo";
$banco = "portal";

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor","$usuario","$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados<br><br>!'.$e;
}


//variaveis do sistema
$nome_sistema = 'Eduuardo';
$email_sistema = 'carloseduardobezerradasilva2@gmail.com';
?>

