<?php
$name = "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "Diretório $name criado com sucesso";
}else{
	//rmdir($name); remove a pasta
	echo "Já existe existe o diretorio : $name ";
}