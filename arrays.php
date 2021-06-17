<?php
// Define a simple array composed of text strings
$ex1 = ['', 'sadasd', 'fdsfds'];
// Define a simple array consisting of whole numbers and decimal numbers
$ex2 = [1, 2, 2.22];
// Define a multidimensional array
$ex3 = [[1, 2, 3], ['uno', 'dos', 'tres']];
// Execute the function that allows to obtain the length of an array
$ex4Length = sizeof($ex3);
// Execute the function that allows to obtain the combination of two arrays
$ex5 = array_merge($ex1, $ex2);
// Execute the function that once is given an array return the last element of it
$lastElement = end($ex3);
// Execute the function that once is given an array add a new element to the array in question
array_push($ex1, 'asdsad');
