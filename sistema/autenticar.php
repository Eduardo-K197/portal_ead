<?php
@session_start();
require_once('conexao.php');
$usuario = $_post['usuario'];
$senha = $_post['senha'];
$senha_crip = md5($senha);

$query = $pdo->query("select * from usuarios where (cpf = '$usuario' or usuario = '$usuario') and senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    //recuperar o nivel do usuario
    $_SESSION['nivel'] = $res[0]['nivel'];
    $_SESSION['cpf'] = $res[0]['cpf'];
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nome'] = $res[0]['nome'];
    
    if($_SESSION['nivel'] == 'Administrador'){
        echo "<script>window.location='painel-admin'</script>";
    }
    
} else {
    echo "<script>window.alert('Dados Incoretos!')</script>";
    echo "<script>window.location='index.php'</script>";
}


?>

