<?php

namespace ProjectZoo\Safari\Animaux;

use ProjectZoo\Safari\Animaux\Animal;

class lion extends Animal{
	private $niveauagressivite;

	public function __construct($n, $p, $m, $na)
    {
        parent::__construct($n, $p, $m);
        $this->niveauagressivite = $na;
    }

	public function crier(){

		return "ROAAAAR ! " . $this->nom ." rugit férocement. " . "<br>";

	}
	public function chasser(){

	return "le Lion" . $this->nom . "part en chasse !";
	}
}



?>