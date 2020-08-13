<?php

require_once("config.php");

$sql = new Sql();

$result = $sql->select("SELECT * FROM usuario");

echo json_encode($result);

?>