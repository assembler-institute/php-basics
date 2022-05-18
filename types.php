<?php

echo ("<h1>Types of variables and data</h1>");
$myBoolean = true;
$myInteger = 77;
$myFloat = 77.11;
$myString = "jose";
$myArray = array("red", 'blue', "white");
$myObject = (object) ['property' => 'city'];
$myNull = null;

echo("<p>myBoolean = true</p>");
var_dump($myBoolean);
echo("<hr>");

echo("<p>myInteger = 77</p>");
var_dump($myInteger);
echo("<hr>");

echo("<p>myFloat = 77.11</p>");
var_dump($myFloat);
echo("<hr>");

echo("<p>String</p>");
var_dump($myString);
echo("<hr>");

echo("<p>Array</p>");
var_dump($myArray);
echo("<hr>");

echo("<p>Object</p>");
var_dump($myObject);
echo("<hr>");

echo("<p>Null</p>");
var_dump($myNull);
echo("<hr>");
?>