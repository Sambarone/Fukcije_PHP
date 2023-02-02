<?php


/*

$ime="Ivan Sambol";
ispis($ime);


//ne prima parametar, vraća vrijednost
$t=time();
echo $t, '<br>'; // vraća sekunde od 1.1.1970. godine

//ne prima vijrednost, ne vraća vrijednost
phpinfo();


//prima parametar, ne vraća vrijednost
print_r($_GET);



function ispis($vrijednost){
    echo '<pre>';
    print_r($vrijednost);
    echo '</pre>';
}


// prima parametar, vraća vrijednost
if(!isset($_GET['ime']))
{
echo 'Ime je postavljeno', '<br>';

}

*/


    function ispis($vrijednost){
        echo '<pre>';
        print_r($vrijednost);
        echo '</pre>';
        echo '<hr>';
    }
    


function pozdrav()
{
        echo '<pre>';
        echo 'Hello world';
        echo '</pre>';
        echo '<hr>';


}

pozdrav();

$ime='Ivan';
ispis($ime);

$niz=[3,2,3,5,34,30];
ispis($niz);

//kad je funkcija u klasi redosljed nije bitan

function slucajnibr(){
    $prvi=rand(1,10);
    $drugi=rand(-1,-10);
    return abs($prvi+$drugi);
}

ispis(slucajnibr());

//prima parametre vraća vrijednost

function primBr($broj){
    $p=true;
        for ($i=2;$i<$broj;$i++){
            if($broj%$i===0){
                return false;
            }
        }


    return true;
}

ispis(primBr(11));

//zbroj sume prvih 13 primBrojeva
$brojac=0;
$suma=0;
$pocetni=2;
while (true)
{
    if(primBr($pocetni)){
        $suma+=$pocetni;
        $brojac++;
    }
    $pocetni++;
    if($brojac===13){
        break;
    }
    


}

ispis($suma);