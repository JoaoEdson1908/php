<?php
//Classe Abstrata

interface Veiculo{

	public function acelerar($velocidade);

} 

//Não pode ser instanciada diretamente
abstract class Automovel implements Veiculo{
	
	public function acelerar($velocidade){
		return $velocidade;
	}

}

class DelRey extends Automovel{

	public function empurrar(){

	}

}

//$carro = new Automovel();
$carro = new DelRey();
echo $carro->acelerar(200);


?>