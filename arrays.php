<?php

// Define a simple array composed of text strings
$stringArray = array("the","world","of","php");
print_r($stringArray);
echo "<br>";

// Define a simple array consisting of whole numbers and decimal numbers
$numberArray = array(1,2.2, 3,4.5,5);
print_r($numberArray);
echo "<br>";

// Define a multidimensional array
$multiDimArray = array (array(4,5,6), array(1,2,3));
print_r($multiDimArray);
echo "<br>";

// Execute the function that allows to obtain the length of an array
$array_l = count($stringArray);
echo $array_l."<br>";

// Execute the function that allows to obtain the combination of two arrays
$array_merge = array_merge($stringArray, $numberArray);
print_r($array_merge);
echo "<br>";

// Execute the function that once is given an array return the last element of it
$lastElement = array_key_last($stringArray);
print_r($stringArray[$lastElement]);
echo "<br>";

// Execute the function that once is given an array add a new element to the array in question
array_push($stringArray, "v8");
print_r($stringArray);
echo "<br>";

