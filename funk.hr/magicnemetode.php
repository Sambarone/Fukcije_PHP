<?php

include_once 'Pomocno.php';

// __construct, __get, __set, __toString, __destruct

class Osoba{
    private $ime;
    private $podaci;

            // konstruktor koji se izvodi pozivom new
            //da se definiraju neke zavinosti koje su potrebne za rad klase
            // ukolio ima samo $ime, konstrukotr mora primiti parametar, a ako ima $ime=''
            //ne mora primiti parametar
    public function __construct($ime=''){
            $this->ime=$ime;
            $this->podaci=[];

    }

    public function getIme(){
		return $this->ime;
	}

	public function setIme($ime){
		$this->ime = $ime;
	}

    public function __set($naziv, $vrijednost){
        Pomocno::ispis($naziv);
        Pomocno::ispis($vrijednost);
        $this->podaci[$naziv]=$vrijednost;
    }

    public function __get($naziv){
            if(isset($this->podaci[$naziv])){
                return $this->podaci[$naziv];
            }
            else {
                return 'Ključ ' .$naziv .' nije postavljen';
            }
    }
}

$o=new Osoba('Pero'); //pozvana construct metoda, 
$o->prezime='Kartaš'; //okida magičnu metodu __set ukoliko ona postoji
                    //naziv-prezime, vrijednost - Kartaš
Pomocno::ispis($o->getIme());
Pomocno::ispis($o->prezime); //poziva se __get
Pomocno::ispis($o->ime);        //pozvala se __get
$o->ime='Marko';        //opet se pozvala __set metoda
