<?php

// Length of an array => sizeof($array) == count($array)
// end($array) => returns last element of an array
// array_push($array) => add element to an array

echo("<h2>Arrays on PHP</h2>");

echo("<h2>Array composed of text strings</h2>");
$cities = array ("Berlin", "Lisboa", "Moscu");
print_r($cities);
echo("<hr>");

echo("<h2>Array consisting of whole numbers and decimal numbers</h2>");
$numbers = array (12,45,34.6, 89.2534);
print_r($numbers);
echo("<hr>");

echo("<h2>Multidimensional array</h2>");
$customers = array (
    array("John", "Lennon", 34),
    array ("Robert", "Bale", 52),
    array("Steven", "McCain", 23)
);
print_r($customers);
echo("<hr>");

echo("<h2>Length of an array</h2>");
echo("<p>The length of the array ('Berlin', 'Lisboa', 'Moscu') is " .sizeof($cities). "</p>");
echo("<hr>");

echo("<h2>Combination of two arrays</h2>");
$firstName = "Yoko";
$secondName = "Ono";
echo($firstName. " " .$secondName);
echo("<hr>");


echo("<h2>Function that returns the last element of an array</h2>");
$countries = array("Spain", "France", "Italy");
echo ("<p>The last element of the array ('Spain', 'France', 'Italy') is " .end($countries). "</p>");
echo("<hr>");


echo("<h2>Function that once is given an array add a new element to the array</h2>");
$friends = array("Paul", "Anna","Yoko");
print_r($friends);
echo("<br>");
array_push($friends, "Carol", "David");
print_r($friends);
?>