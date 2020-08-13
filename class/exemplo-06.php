<?php
#Encapsulamento

class Pessoa{
    public $nome = "João Edson"; //Podem ser chamadas fora da classe
    protected $idade = 48; 
    private $senha = "qwe1230"; //Não é compartilhado em herança

    public function verDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this) . "<br>";
    
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    
    }

}

$obj = new Programador();

#echo $obj->senha;

$obj->verDados();

?>