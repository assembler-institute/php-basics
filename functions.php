<?php


function suma($arg_1,$arg_2){
echo "Funcion de ejemplo";
return print($arg_1 + $arg_2);
}

suma(3,5);
echo "<br>";

function plus($arg_1,$arg_2){
    echo "Funcion de ejemplo";
    return print($arg_1 * $arg_2);
    }

    plus(2,5);
    echo "<br>";

function div($arg_1,$arg_2){
    echo "Funcion de ejemplo";
    return print($arg_1 / $arg_2);
    }

    div(30,2);
    echo "<br>";


function multi($arg_1,$arg_2,$variable){
    switch ($variable) {
        case 'suma':
            suma($arg_1,$arg_2);
            break;
        case 'plus':
            plus($arg_1,$arg_2);
            break;
        case 'div':
            div($arg_1,$arg_2);
            break;
    }
    return $arg_1 / $arg_2;
    }

multi (1,2,"suma");
echo "<br>";
multi (5,2,"plus");
echo "<br>";
multi (10,2,"div");
echo "<br>";