<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

$retorno = new Usuario();

$retorno->loadById(1);

echo $retorno;

?>