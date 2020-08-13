<?php

class Endereco{

	#Método construtor é chamado assim que a classe é instanciada, colocando () em "new Classe()" é chamado __construct

	private $endereco;

	public function __construct($data){

		$this->endereco = $data;

		$parts = explode(",", $data);
		foreach ($parts as $part) {
			var_dump(trim($part));
		}

	}

	public function __toString(){
		return "Endereço Informado:" . $this->endereco;
	}

}

$endereco = new Endereco("Rua Miguel de Freitas, St Antonio, Barbalha");

echo $endereco;

?>