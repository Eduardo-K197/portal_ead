<?php
require_once('conexao.php');
$senha = '123';
$senha_crip = md5($senha);

//verficar usuario administrador no banco
$query=$pdo->("select * from usuarios where nivel = 'Administrador'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) == 0){
//criar um usuario administrador caso não exista
$pdo->query("INSERT INTO usuarios SET nome = 'Administrador', cpf = '000.000.000-00', usuario = 'carloseduardobezerradasilva2@gmail.com', senha ='$senha', senha_crip = 'senha_crip', nivel = 'Administrador', foto = 'sem-perfil,jpg', id_pessoa = 1, ativo = 'Sim', data = curDate() ");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Portal de cursos</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="autenticar.php">
    <input type="text" name="usuario" placeholder="Email ou CPF">
    <input type="password" name="senha" placeholder="Digite a sua senha">
    <button type="submit">Logar</button>
</form>
</body>
</html>
