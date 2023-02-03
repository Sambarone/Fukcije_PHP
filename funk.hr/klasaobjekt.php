<?php
include_once 'Pomocno.php';

//klasa je opisnik objekta
class Osoba{

public $ime;
public $prezime;

public function imePrezime(){
    return $this->ime. ' ' . $this->prezime;}


}

//objekt je insatnca, pojavnost klase
//$o je objekt
$o=new Osoba();

// s -> pristupamo metodama i svojstvima objekta

$o->ime='Pero';
$o->prezime='Marić';
Pomocno::ispis($o);     //ispisuje sva svojstva

Pomocno::ispis($o->ime);    //ispisuje samo ime

Pomocno::ispis($o->imePrezime());
//PHP je interpeter i nama ne treba inicijalizirana klasa
//PHP kompajlira u letu, zato imamo stdClass

$o2=new stdClass();
$o2->ime='Marijan';
Pomocno::ispis($o2);
Pomocno::ispis($o2->ime);
