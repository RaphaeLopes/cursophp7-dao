<?php 

require_once("config.php");
/*
//Carrega uma lista de Usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrga uma lista de usuario por filtro
/*
$lista = Usuario::search("es");
echo json_encode($lista);
*/
/*
//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("rlopes", "1111111");

echo $usuario;
*/

/*
//Carrega um Usuario
$usuario = new Usuario();
$usuario->loadById(2);

echo $usuario;
*/

/*

//Insert Usuario
$usuario = new Usuario("Novo", "ttrds");

echo $usuario ->insert();
*/

//Update Usuario
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("Vendo", "!$#43");
echo $usuario;
 ?>