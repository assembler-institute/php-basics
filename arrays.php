<?php

#Define a simple array composed of text strings

$pokemon = array("Pikachu", "Charmander", "Mew");

echo "I like " . $pokemon[0];

echo "<br>";

#Define a simple array consisting of whole numbers and decimal numbers


$numbers = array(1, 2.4, 4, 6, 7.9);

echo "I have " . $numbers[0];

echo "<br>";

#Define a multidimensional array

$brand = array (
    array("Sony","Nike"),
    array("Microsoft","Adidas"),
    array("Nintendo","Kinder"),
    );

echo $brand[0][1];

echo "<br>";

#Execute the function that allows to obtain the length of an array


$game = array(1, 2, 3, 4, 5, 6, 7);

echo sizeof($game);

echo"<br>";

#Execute the function that allows to obtain the combination of two arrays


$days = array("Monday","Sunday","Friday");
$months = array("January","May","December");

$year = array_combine($days,$months);
print_r($year);

echo "<br>";

#Execute the function that once is given an array return the last element of it


$last = array("one", "two", "three", "four");

echo end($last);

echo "<br>";

#Execute the function that once is given an array add a new element to the array in question

$colors = array("blue","purple");
array_push($colors,"black","yellow","orange","green");
print_r($colors);

?>