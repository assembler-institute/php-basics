<?php

#SIMPLE ARRAY STRING

$fruits = ["mango", "kiwi", "apple"];
var_dump($fruits);
echo "<br><br>";

#SIMPLE ARRAY NUMBERS

$numbers = [1,2,3,4,5];
var_dump($numbers);
echo "<br><br>";



#MULTIDIMENSIONAL ARRAY

$multiArr = [[1, 2], [2, 3], [4, 5]];
var_dump ($multiArr);
echo "<br><br>";

#LENGTH ARRAY

$length = count($multiArr);
var_dump($length);
echo "<br><br>";

#COMBINATION ARRAYS

$combi = array_merge($numbers, $fruits);
var_dump($combi);
echo "<br><br>";


#RETURN LAST NUMBER

$lastN = end($numbers);
var_dump($lastN);
echo "<br><br>";



#ADD NEW ELEMENT

$newE = array_push($fruits, "orange");
var_dump($newE);
echo "<br><br>";




?>