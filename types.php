<?php
$string = "Hello world";
var_dump($string);
echo "<br/>";
$number = 59;
var_dump($number);
echo "<br/>";
$float = 59.994;
var_dump($float);
echo "<br/>";
$boolean = true;
var_dump($boolean);
echo "<br/>";
$array = ["vaso","copa","lata"];
var_dump($array);
echo "<br/>";
$NULL = null;
var_dump($NULL);
echo "<br/>";
//object
class coches {
    function prinText(){
        echo "Hola soy una funcion";
    }
}
$coche = new coches;
$coche->prinText();
