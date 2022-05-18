<?php 

$arrayOfStrings = array('human', 'dogs', 'cats', 'snakes'); // array of strings

$arrayOfNumbers = [1, 5, 20, 33.3, 104.7, 2.4];

$multiDArray = ['banana', ['green apple, red apple'], array('blueberries, raspberries')]; // a multidimensional array

echo count($arrayOfStrings); // finding the length of an array
echo '<br>';

echo "<pre>";
var_dump(array_merge($arrayOfNumbers, $arrayOfStrings)); //  combination of two arrays
echo "</pre>";
echo '<br>';

echo end($arrayOfStrings); // showing the last element of an array
echo '<br>';

array_push($arrayOfStrings,'birds'); // adding birds to array of strings

