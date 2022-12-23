<?php

#Simple array string

$fruits = ["mango", "kiwi", "apple"];
var_dump($fruits);
echo "<br><br>";

#Simple array numbers

$numbers = [1,2,3,4,5];
var_dump($numbers);
echo "<br><br>";

#Multidimensional array

$multiArr = [[1, 2], [2, 3], [4, 5]];
var_dump ($multiArr);
echo "<br><br>";

#Length array

$length = count($multiArr);
var_dump($length);
echo "<br><br>";

#Combination array

$combi = array_merge($numbers, $fruits);
var_dump($combi);
echo "<br><br>";


#Return last number

$lastN = end($numbers);
var_dump($lastN);
echo "<br><br>";

#Add new element

$newE = array_push($fruits, "orange");
var_dump($newE);
echo "<br><br>";

?>