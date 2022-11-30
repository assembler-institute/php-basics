<?php

var_dump(1 == 2);
echo "<h1>var_dump(1+10)</h1>";
var_dump(1 + 10);
echo "<h1>var_dump(5-1)</h1>";
var_dump(5 - 1);
echo "<h1>var_dump(2*5)</h1>";
var_dump(2 * 5);
echo "<h1>var_dump(6/2)</h1>";
var_dump(6 / 2);
echo "<h1>var_dump(5/2)</h1>";
var_dump(5 / 2);

echo "<h1>var_dump('hola' == 'hola')</h1>";
var_dump("hola" == "hola");

echo "<h1>var_dump('hola' != 'hola')</h1>";
var_dump("hola" != "hola");

echo "<h1>var_dump(10<5)</h1>";
var_dump(10 < 5);

echo "<h1>var_dump('hola'>'adios')</h1>";
var_dump("hola" > "adios"); //true

echo "<h1>var_dump(10<=5)</h1>";
var_dump("hola" <= "adios"); //true

echo "<h1>var_dump(10>=5)</h1>";
var_dump("hola" >= "adios"); //true
$num = 1;
$num2 = 2;
if ($num == 1 && $num2 == 2) {
    echo "<br>existen";
}

if($num == 1 || $num2 == 2){ //si uno de los dos o los dos son true entrara
    echo "<br>Hay uno de los dos numeros";
}

if($num == 1 xor $num2 == 2){ //si uno de los dos o los dos son true entrara, pero no ambos
    echo "<br>Hay uno de los dos numeros pero solo uno";
}else{
    echo "<br>Los dos numero coincidicen";
}
