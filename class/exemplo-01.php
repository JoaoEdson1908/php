<?php

class Pessoa{

	public $nome;//Atributo

	public function falar(){//Método

		return "Hi, my name is ".$this->nome;

	}

}

$person = new Pessoa();
$person->nome = "João Edson";

echo $person->falar();


?>