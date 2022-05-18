<?php
header("Content-type: text/plain");

// Define a simple array composed of text strings
$arrString = ['A', 'B', 'C', 'D'];
print_r($arrString);

// Define a simple array consisting of whole numbers and decimal numbers
$arrNumber = [1.7, 3, -5, 0.5];
print_r($arrNumber);

// Define a multidimensional array
$foods = array(
    array("Pizza", "Pasta", "Focaccia"),
    array("Salmorejo", "Paella", "Cocido"),
    array("Croissant", "Brioche", "Fromage"),
);
print_r($foods);

// Execute the function that allows to obtain the length of an array
$lenght = count($foods);
echo "The lenght of the food array is $lenght\n";

// Execute the function that allows to obtain the combination of two arrays
$resultMerge = array_merge($arrString, $arrNumber);
print_r($resultMerge);

// Execute the function that once is given an array return the last element of it
$fruits = array('apple', 'banana', 'kiwi');
echo "The last element of the array fruits is ", end($fruits)."\n"; // kiwi

// Execute the function that once is given an array add a new element to the array in question
$fruit = "mango";
array_push($fruits, $fruit);
echo "Adding ", $fruit, " to the array fruits ", print_r($fruits);

