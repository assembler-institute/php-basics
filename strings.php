<?php

#Text

$txt = "Hello";
echo $txt;

echo "<br><br>";

#Text Variable

echo "I said " . $txt . "<br><br>";


#Concatenate

$txt2 = "World";

echo "I said " . $txt . " " . $txt2;

echo "<br><br>";

#Case Sensitive
$txt3 = "My car is white";
echo str_replace("white", "red", $txt3);
echo "<br><br>";

#Replace text in a String

$txt4 = "My car is WHITE";
echo str_ireplace("white", "red", $txt3);
echo "<br><br>";

#Write Text Nº times

$txt5 = "It's sunny day <br>";

echo str_repeat($txt5, 3);
echo "<br><br>";


#Obtain the lenght

echo strlen($txt);
echo "<br><br>";


#Obtain Position

echo strpos($txt2, "o");
echo "<br><br>";

#Capitalized

$txtU = strtoupper($txt);
echo $txtU;
echo "<br><br>";

#Lowercase
$txt2L = strtolower($txt2);
echo $txt2L;
echo "<br><br>";

#Obtain text substring from a given position

echo substr($txt, -3);
echo "<br><br>";

?>