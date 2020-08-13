<?php

$conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");

$stmt = $conn->prepare("DELETE FROM usuario WHERE id = :id");

//$email = "novoususario@test.com";
//$senha= "123qwe";
$id = 2;

//$stmt->bindParam(":email", $email);
//$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":id", $id);

$stmt->execute(); 

?>