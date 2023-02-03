<?php
include_once 'mojefunkcije.php';

$suma=0;
for ($i=0;$i<=100;$i++){
    $suma+=$i;
}

ispis($suma);

//funkcija poziva samu sebe uz uvijet prekida
//ako nema uvijet prekida događa se stack overflow

function rekurzija($broj){
    if($broj===1){
        return 1;
    }
    
    return $broj+rekurzija($broj-1);

    // $broj===1? 1: $broj+rekurzija($broj-1);

}

ispis (rekurzija(100));
//koristi se kad ne znamo koliko je nešto duboko, 
// ali znamo kad je kraj


