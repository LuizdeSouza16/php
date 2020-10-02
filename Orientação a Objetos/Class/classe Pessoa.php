<?php

ini_set('display_errors', 'On');

    error_reporting(E_ALL);
	/**
	 * 
	 */
	class Pessoa
	{
		
		public $nome = "Ramos Lerdorf";
		protected $idade = 48;
		private $senha = '1234';

		public function verDados(){
			echo $this->nome . "</br>";
			echo $this->idade. "</br>";
			echo $this->senha. "</br>";
		}
		function __construct(){}
	}

	class Programador extends Pessoa{

		public function verDados(){
			
			echo get_class($this). "<br>";

			echo $this->nome . "</br>";
			echo $this->idade. "</br>";
			echo $this->senha. "</br>";
		}
	}



	$ramos = new Programador();

	echo $ramos->nome . "<br>";

	echo  $ramos->verDados();