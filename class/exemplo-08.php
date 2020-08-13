<?php
#Interface

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

} 

class Carro implements Veiculo{

}

$carro = new Carro();

?>