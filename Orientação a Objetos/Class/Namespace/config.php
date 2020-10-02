<?php
	
ini_set('display_errors', 'On');

error_reporting(E_ALL);

spl_autoload_register(function($nameClass){

	var_dump($nameClass);
	$dirClass = "Class";
	$filename = str_replace ("\\", "/",$dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");


	if(file_exists($filename)) {
		require_once ($filename);
	}

});


