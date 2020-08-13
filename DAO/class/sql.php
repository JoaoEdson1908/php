<?php

class Sql extends PDO{

	private $conn;

	#Conexão com o Banco
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=php7", "root", "");
	
	}


	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($key, $value);

		}

	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	
	}


	#Preparando o Comando SQL
	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rawQuery, $params = array()){
		
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	
}

?>