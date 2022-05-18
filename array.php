<?php
// Define a simple array composed of text strings
$arrayTexts = ["my", "name", "is", "Alejandro"];

//Define a simple array consisting of whole numbers and decimal numbers

$arrayNumbers = [1, 2, 3, 4.5];

//Define a multidimensional array

$multyArray = [[1, 2], [2, 3], [4, 5]];

//Execute the function that allows to obtain the length of an array

$length = count($multyArray);

//Execute the function that allows to obtain the combination of two arrays

$join = array_merge($arrayNumbers, $multyArray);

//Execute the function that once is given an array return the last element of it

$last = end($arrayNumbers);

//Execute the function that once is given an array add a new element to the array in question

$newArray = array_push($arrayNumbers, 5, 6, 7, 8, 9);
