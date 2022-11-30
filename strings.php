<?php

echo "Adios mundo";
echo "<br/>";

$string = "Hola mundo";
echo "$string";
echo "<br/>";

echo "String $string";
echo "<br/>";

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase;
echo "<br/>";

$newString = str_replace('should', 'avoid', $newphrase);
echo $newString;
echo "<br/>";

echo str_repeat("Hola <br/>", 5);

$stringLenght = 'Hola soy un string de prueba';

echo strlen($stringLenght);

$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
echo "<br/>";
echo "El caracter '$findme' fue encontrado en la cadena '$mystring' en la posicion $pos";

echo "<br/>";
$capitalizeString = "hola mundo";
echo strtoupper($capitalizeString);

echo "<br/>";
$lowerString = "HOLA MUNDO";
echo strtolower($lowerString);

echo "<br/>";
echo substr($lowerString, 5);

