<?php
#Encapsulamento

class Pessoa{
    public $nome = "João Edson"; //Podem ser chamadas fora da classe
    protected $idade = 48; //Só pode ser chamado dentro da classe
    private $senha = "qwe1230"; //Não é compartilhado pelo "extends"

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$obj = new Pessoa();

#echo $obj->senha;

$obj->verDados();

?>