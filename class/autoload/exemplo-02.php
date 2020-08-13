<?php

function includeClass($nomeClasse){

	if(file_exists($nomeClasse.".php") === true){
		require_once($nomeClasse.".php");
	}
	
}

spl_autoload_register("includeClass");
spl_autoload_register(function($nomeClasse){

	if(file_exists("abstracts".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
		require_once("abstracts".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	} 

});


$carro = new DelRey();
var_dump($carro->acelerar(80));

?>