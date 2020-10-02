<?php 
	
class Pessoa{

	public $nome; //Atributo nome da pessoa

	public function falar(){ // Metodo fala da Classe Pessoa

		return "O meu nome é {$this->nome}";
	} // falar

} // Pessoa


$glaucio = new Pessoa(); // Instancia da classe

$glaucio->nome = "Glaucio Daniel"; // 

echo $glaucio->falar();
?>