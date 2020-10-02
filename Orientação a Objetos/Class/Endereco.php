<?php
ini_set('display_errors', 'On');

error_reporting(E_ALL);

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function getLogradouro () {
 			return $this->logradouro;
 	}

 	public function setLogradouro($logradouro) {
 		$this->logradouro = $logradouro;
 	}	// setModelo

 	public function getNumero () {
 		return $this->numero;
 	}

 	public function setNumero($numero) {
 		$this->numero = $numero;
 	}	
 	public function getCidade () {
 		return $this->cidade;
 	}

 	public function setCidade($cidade) {
 			$this->cidade = $cidade;
 	}	// setModelo

 	public function __construct($a = NULL , $b = NULL, $c = NULL){
 		$this->logradouro 	= $a;
 		$this->numero 		= $b;
 		$this->cidade 		= $c;
 	}

 	public function __destruct(){
 		var_dump("DESTRUIR");
 	}

 	public function __tooString(){
 		return $this->logradouro.",".$this->numero."-".$this->cidade;
 	}
}

$meuEndereco = new Endereco("Rua Vitor Hugo", "123" , "Esteio");
var_dump($meuEndereco);

echo $meuEndereco->__tooString();


