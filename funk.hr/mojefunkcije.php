<?php

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

function slucajnibr(){
    $prvi=rand(1,10);
    $drugi=rand(-1,-10);
    return abs($prvi+$drugi);
}


function primBr($broj){
    $p=true;
        for ($i=2;$i<$broj;$i++){
            if($broj%$i===0){
                return false;
            }
        }


    return true;
}
// what a terrible failure
function wtf($vrijednost){
    echo '<pre style="background-color:red; color:white">';
    print_r($vrijednost);
    echo '</pre>';
    echo '<hr>';
}