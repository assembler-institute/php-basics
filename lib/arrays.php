<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Define a simple array composed of text strings
$cars = array("Volvo", "BMW", "Toyota");
echo '<strong>strings:</strong> ';
var_dump($cars);
echo '<br><br>';

// Define a simple array consisting of whole numbers and decimal numbers
$numbers = array(1, 2, 3, 4, 5);
echo '<strong>numbers:</strong> ';
var_dump($numbers);
echo '<br><br>';

// Define a multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);
echo '<strong>multidimensional:</strong> ';
print_r($cars);
echo '<br><br>';

// Execute the function that allows to obtain the length of an array
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars), '<br><br>';

// Execute the function that allows to obtain the combination of two arrays
$array1    = array("color" => "red", 2, 4);
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo '<br><br>';

// Execute the function that once is given an array return the last element of it
$cars = array("Volvo", "BMW", "Toyota");
echo end($cars);
echo '<br><br>';

// Execute the function that once is given an array add a new element to the array in question
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

require_once('../foot.php');
