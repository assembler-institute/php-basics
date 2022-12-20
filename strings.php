<?php

#TEXT

$txt = "Hello";
echo $txt;

echo "<br><br>";

#TEXT VARIABLE

echo "I said " . $txt . "<br><br>";


#CONCATENATE

$txt2 = "World";

echo "I said " . $txt . " " . $txt2;

echo "<br><br>";

#CASE SENSITIVE
$txt3 = "My car is white";
echo str_replace("white", "red", $txt3);
echo "<br><br>";

#REPLACE TEXT IN A STRING

$txt4 = "My car is WHITE";
echo str_ireplace("white", "red", $txt3);
echo "<br><br>";

#WRITE TEXT N TIMES

$txt5 = "It's sunny day <br>";

echo str_repeat($txt5, 3);
echo "<br><br>";


#OBTAIN THE LENGTH

echo strlen($txt);
echo "<br><br>";


#OBTAIN POSITION

echo strpos($txt2, "o");
echo "<br><br>";

#CAPITALIZED

$txtU = strtoupper($txt);
echo $txtU;
echo "<br><br>";

#LOWERCASE
$txt2L = strtolower($txt2);
echo $txt2L;
echo "<br><br>";

#OBTAIN TEXT SUBSTRING FROM A GIVEN POSITION

echo substr($txt, -3);
echo "<br><br>";










?>