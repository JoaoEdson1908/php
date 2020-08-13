<?php

spl_autoload_register(function($nomeClasse){
	
	require_once($nomeClasse.".php");

});

$carro = new DelRey();
var_dump($carro->acelerar(80));

?>