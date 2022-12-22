<?php
// Define a simple array composed of text strings
$array1 = array("apple", "banana", "orange");

// Define a simple array consisting of whole numbers and decimal numbers
$array2 = array(1, 2.5, 3, 4.5);

// Define a multidimensional array
$array3 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Execute the function that allows to obtain the length of an array
echo count($array1); // Outputs 3

// Execute the function that allows to obtain the combination of two arrays
$combinedArray = array_merge($array1, $array2);
print_r($combinedArray);
// Outputs Array ( [0] => apple [1] => banana [2] => orange [3] => 1 [4] => 2.5 [5] => 3 [6] => 4.5 )

// Execute the function that once is given an array return the last element of it
echo end($array1); // Outputs "orange"

// Execute the function that once is given an array add a new element to the array in question
array_push($array1, "mango");
print_r($array1); // Outputs Array ( [0] => apple [1] => banana [2] => orange [3] => mango )



?>