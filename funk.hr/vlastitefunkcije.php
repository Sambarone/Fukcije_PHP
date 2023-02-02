<?php


require_once 'mojefunkcije.php';

pozdrav();

ispis('Kako si');

$i=5;

function duplo($broj){

// Warning: Undefined variable $i 
//    return $i*$broj;

}

wtf("Upozorenje");

require_once 'Pomocno.php';

// pozivam metodu na samoj klasi
// takva metoda mora biti static
Pomocno::ispis($i);
echo Pomocno::$STATUS_GOTOV;


// da bi pozvali metodu na samoj instanci klase 
//mora biti static, statične metode ne mogu čuvati stanje
$p=new Pomocno();
$p->ispis($i);

//ovo ispod ne radi zato što prinatnje nije static
// Pomocno::printanje($i)


//ovo radi jer nije statična metoda
$p->printanje($i);

$p->setIme("Pero");
// sleep(2);

$p->ispis($p->getIme());

echo Pomocno::validOIB('77899485939')? 'Ok' : 'Ne';



