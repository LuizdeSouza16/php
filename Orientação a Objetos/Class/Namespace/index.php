<?php

	require_once ("config.php");
	
	use Clientes\Cadastro;

	$cadastro = new Cadastro();

	


	$cadastro->setNome("Luiz Ubiratan");
	$cadastro->setEmail("LuizUbiratan@gmail.com");
	$cadastro->setSenha("123");
	echo "<hr>";
	$cadastro->registrarVenda();


 ?>