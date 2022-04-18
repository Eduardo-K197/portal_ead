<?php

$servidor = "3.94.92.6";
$usuario = "Eduardo";
$senha = "353331499Eduardo";
$banco = "portal";

try {
    $pdo = new PDO("mysql:dbname;=$servidor, $usuario, $senha, $banco");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados<br><br>!'.$e;
}



