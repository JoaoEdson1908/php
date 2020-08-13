<?php
//Polimorfismo

abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}

}

class Passaro extends Animal{

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " .  parent::mover();
	}

}

$dog = new Cachorro();

echo $dog->falar();
echo "<br>";
echo $dog->mover();

$cat = new Gato();
echo "<br><hr>";

echo $cat->falar();
echo "<br>";
echo $cat->mover();

$bird = new Passaro();
echo "<br><hr>";

echo $bird->falar();
echo "<br>";
echo $bird->mover();

?>