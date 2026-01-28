<?php

namespace ProjectZoo\Safari\Animaux;

class Animal {
	protected $nom;
	protected $poids;
	protected $estmalade;
	

	public function __construct($n, $p){
		$this->nom = $n;
		$this->poids = $p;
		$this->estmalade = false;
	} 
	public function getNom(): string {

    	return $this->nom;
		
	}

	public function manger(){
		return "l'animal mange";
	}

	public function sesoigner(){
		$this->estmalade = false;
	}

	public function crier(){
		return "exemple cri . exe";
	}
}




?>