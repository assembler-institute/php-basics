<?php

$bulean = true;
$entero = 1;
$flotante = 3.14;
$string = "hola";
$array = [1,2,3];

class shirts{

    function echoStuff(){
        echo "Hola, soy una funcion dentro de una clase";
    }
}

$shirt = new shirts;
$shirt -> echoStuff();

$nulo = NULL;