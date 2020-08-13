<?php

$conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");

$stmt = $conn->prepare("INSERT INTO usuario (email, senha) VALUES(:email, :senha)");

$email = "newuser@test.com";
$senha= "qwe123";

$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);

$stmt->execute();

?>