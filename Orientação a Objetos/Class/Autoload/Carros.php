<?php
ini_set('display_errors', 'On');

error_reporting(E_ALL);

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse.".php") === true){
		require_once ($nomeClasse.".php");
	}
}

spl_autoload_register("incluirClasses");

$carro = new DelRey();

$carro->acelerar(80);

?>