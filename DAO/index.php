<?php

require_once ("config.php");


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

var_dump($usuarios);
*/

//Carrega um usuario
//$root->loadById(2);

//Carrega uma lista de usuario

//$lista = Usuario::getList();

///echo json_encode($lista);

//$busca = Usuario::search("l");
//echo json_encode($busca);

//$usuarios = new Usuario();
//$usuarios->login("root", "root");


//$aluno = new Usuario();

//$aluno->insert("aluno" , "alu123");
//$lista = Usuario::getList();

//$usuario = new Usuario();

//$usuario->loadById(5);

//$usuario->update("professor" , "senhaprofessor");

//$lista = Usuario::getList();
//var_dump($lista);

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

var_dump($usuario);


$lista = Usuario::getList();
var_dump($lista);


