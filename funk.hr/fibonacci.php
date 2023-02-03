<?php
include_once 'mojefunkcije.php';



function fib($i){

 if($i<3){
    return 1;
 }


    return fib($i-1)+fib($i-2);

}

ispis(fib(6));