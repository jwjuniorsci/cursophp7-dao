<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*$retorno = new Usuario();

$retorno->loadById(1);

echo $retorno;*/

/*$lista = Usuario::getList();
echo json_encode($lista);*/

/*$search = Usuario::search("uni");
echo json_encode($search);*/

/*$usuario = new Usuario();
$usuario->login("junior","aparecida");
echo $usuario;*/

/*$aluno = new Usuario("alun","@lun0");
$aluno->insert();

echo $aluno;*/

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("developer", "!@#$%&");

echo $usuario;

?>