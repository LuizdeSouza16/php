<?php
ini_set('display_errors', 'On');

error_reporting(E_ALL);
interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{
	
	public function acelerar($velocidade) {
		echo "<br> O veiculo acelerou até {$velocidade} Km/h ";

	}

	public function frenar($velocidade) {
		echo "<br> O veiculo frenou até {$tvelocidade} Km/h ";
	}

	public function trocarMarcha($marcha) {
		echo "<br> O veiculo engatou a {$marcha}";	 
	}
}

class DelRey extends Automovel{

	public function empurar(){

	}


}

$carro  = new DelRey();
$carro->acelerar(200);
?>
