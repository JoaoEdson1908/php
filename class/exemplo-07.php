<?php
#Heranças

class Documento{
    
    private $numero;

    public function getNumero():int{
       return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

}

class Cpf extends Documento{

  public function validar():bool{

    return true;

  }  

}

$documento = new Cpf();

$documento->setNumero("62393964355");
echo $documento->getNumero();

var_dump($documento->validar());

?>