<?php 

echo "<h4>Print a text string</h4>";

$text = "hola<br>";
echo $text;

$concat = "Hola";
echo "$concat como estas<br>";

$search = "azul";
$replace = "rojo";
$subject = "amarillo Azul lila azul verde Azul<br>";
 
echo str_replace($search,$replace,$subject); //case sensitive (replace string)

$subject2 = "amarillo azul lila azul verde azul<br>";
echo str_ireplace($search,$replace,$subject2); //not case sensitive (replace string)

echo str_repeat("Hola como estas ",5)."<br>"; //repeat phrases

/* echo strlen($search)."<br>"; //length of a text */

echo strpos($subject2, $search)."<br>"; //return pos

echo strtoupper($subject2);

echo strtolower($subject);

echo substr($subject2, 14,4); //return substring desde la pos 14 + 4 caracteres