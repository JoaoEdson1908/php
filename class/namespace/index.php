<?php

require_once("config.php");

use Cliente\Cadastro;

$usuario = new Cadastro();

$usuario->setNome("João Edson");
$usuario->setEmail("microjeyn@gmail.com");
$usuario->setSenha("qwe123");

echo $usuario;
echo "<br>";
$usuario->registrarVenda();

?>