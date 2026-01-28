<?php

namespace ProjectZoo\Safari\Animaux;

use ProjectZoo\Safari\Animaux\Animal;

class perroquet extends Animal{

	public function crier(){

		return "Coco veut un gâteau ! " . $this->nom .  " siffle " . "<br>";

	}
	public function envole(){
		return "l'oiseau s'envole !";
	}
}


?>