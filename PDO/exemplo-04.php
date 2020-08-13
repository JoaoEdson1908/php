<?php

$conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM usuario WHERE id = ?");

$id = 1;

$stmt->execute(array($id)); 

$conn->rollback();

echo "Delete OK!";
?>