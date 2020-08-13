<?php

interface Veiculo{

	public function acelerar($velocidade);

} 

//Não pode ser instanciada diretamente
abstract class Automovel implements Veiculo{
	
	public function acelerar($velocidade):int{
		return $velocidade;
	}

}

?>