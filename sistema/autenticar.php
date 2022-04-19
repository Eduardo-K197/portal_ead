c<?php
require_once('conexao.php');
$usuario = $_post['usuario'];
$senha = $_post['senha'];
$senha_crip = md5($senha);

$query = $pdo->query("select * from usuarios where usuario = '$usuario' and 
    senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    //recuperar o nivel do usuario
    $nivel = $res[0]['nivel'];
    echo $nive;
} else {
    echo 'Usuário não existente';
}


?>
