<?php

#String

$texto = "Texto string";
echo "Esto es variable string: $texto";
echo "<br><br>";

#Integer

$numero = 25;
echo "Esto es variable integer: $numero";
echo "<br><br>";

#Float

$numeroFloat = 25.67;
echo "Esto es variable float: $numeroFloat";
echo "<br><br>";


#NULL

$myNull = null;
echo "Esto es variable NULL: $myNull";
echo "<br><br>";


#Variavle boolean
$boleanaOne = true;
echo "Esto es boleana true: $boleanaOne"; 
echo "<br><br>";

$boleanaTwo = false;
echo "Esto es boleana false: $boleanaTwo"; 
echo "<br><br>";

#Array

$colores = array("red", "blue", "green");
echo "Esto es array: $colores[0]"; 
echo "<br><br>";
print_r ($colores);
echo "<br><br>";

#Objeto

$frutas = (object)["fruta1"=>"pera", "fruta2"=>"platano", "fruta3"=>"manzana"];
echo "Esto es un variable-objeto: $frutas->fruta2"; 
echo "<br><br>";

?>









