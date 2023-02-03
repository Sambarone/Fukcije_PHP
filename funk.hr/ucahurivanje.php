<?php
include_once 'Pomocno.php';
class Osoba{
    // učahurivanje, klasa sakrije svojstva, 
    // učihi ih dosstupnim putem javnih get set metoda
    //skrivena svojstva
    private $ime;
    private $prezime;


    //javne metode
    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

	public function getPrezime(){
		return $this->prezime;
	}

	public function setPrezime($prezime){
		$this->prezime = $prezime;
	}



}

$o=new Osoba();
//ne možemo im pristupiti ovako
//  $o->ime='Pero';

$o->setIme('Pero');

Pomocno::ispis($o);
Pomocno::ispis($o->getIme());

