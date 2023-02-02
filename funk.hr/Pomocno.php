<?php

class Pomocno 
{

public static $STATUS_GOTOV=1;

private $ime;

public function setIme($ime){
    $this->ime=$ime;
}

public function getIme(){
    return $this->ime;
}

 public static function ispis($v){

    echo '<pre>';
    print_r($v);
    echo '</pre>';
    echo '<hr>';
}


public function printanje($sto){
    echo $sto, '<br>';
}

public static function validOIB($oib){
            if (strlen($oib) != 11 || !is_numeric($oib)) {
                return false;
            }

            $a = 10;

            for ($i = 0; $i < 10; $i++) {

                $a += (int)$oib[$i];
                $a %= 10;

                if ( $a == 0 ) { $a = 10; }

                $a *= 2;
                $a %= 11;

            }

            $kontrolni = 11 - $a;

            if ( $kontrolni == 10 ) { $kontrolni = 0; }

            return $kontrolni == intval(substr($oib, 10, 1), 10);




}

}