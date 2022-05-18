<?php
//Define a simple array composed of text strings
$strArr = array("Ivan", "Miguel", "Matias");
print_r($strArr);

echo "<br><br><br><br>";


//Define a simple array consisting of whole numbers and decimal numbers
$intArr = array(1, 2,  3, 4, 5, 6, 7, 8, 9, 10, 3.3, 4.4);
print_r($intArr);


echo "<br><br><br><br>";


//Define a multidimensional array
$multArr = array(array("Ivan", "Escribano", 23), array("Matias", "Patrignani", 28));
print_r($multArr);


echo "<br><br><br><br>";


//Execute the function that allows to obtain the length of an array
echo count($intArr);


echo "<br><br><br><br>";

//Execute the function that allows to obtain the combination of two arrays
print_r(array_merge($strArr, $intArr));


echo "<br><br><br><br>";

//Execute the function that once is given an array add a new element to the array in question
array_push($strArr,"Roger","Alejandro");

print_r($strArr);