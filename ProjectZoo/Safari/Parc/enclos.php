<?php

namespace ProjectZoo\Safari\Parc;

use ProjectZoo\Safari\Animaux\Animal;

class enclos {
	private $animaux = [];

	private $capacitemax;

	private $proprete;

	public function __construct($capacitemax = 5)
    {
        $this->capacitemax = $capacitemax;
        $this->proprete = "propre";
    }

	

	public function ajouterunanimal($nouvelanimal){

		if (count($this->animaux) >= $this->capacitemax) {
            return "Erreur : Enclos plein !";
            
        }
		else {
			$this->animaux[] = $nouvelanimal;
        	return "Bienvenue à " . $nouvelanimal->getNom() . " !" . "<br>";
		}

		

	}

	public function entretenir(){

		$this->proprete = "propre";
		return "enclos en nettoyage !";

	}
	public function visiteguidee(): void
    {
    	echo "Voici les animaux de l'enclos :";

        foreach ($this->animaux as $animal) {
            echo $animal->crier();
            
        }
    }


}
?>