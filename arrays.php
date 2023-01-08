<?php

# text string array
$firstArray = array('apple', 'melon', 'grape');
var_dump($firstArray);
echo '<br><br>';

# numbers array
$secondArray = array(1, 3, 0.3, 8.5, 9, 0.1);
var_dump($secondArray);
echo '<br><br>';

# multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  var_dump($cars);
  echo '<br><br>';

# array length (sizeof)
$cars = array("Volvo","BMW","Toyota");
echo sizeof($cars);
echo '<br><br>';

# array length (count)
$cars = array("Volvo","BMW","Toyota", 'MB', 'Tesla');
echo count($cars);
echo '<br><br>';

# array merge
$array1 = array("red","green");
$array2 = array("blue","yellow");
print_r(array_merge($array1,$array2));
echo '<br><br>';

# array combine
$name = array("Peter","Ben","Joe");
$age = array("35","37","43");

$c = array_combine($name,$age);
print_r($c);
echo '<br><br>';

# first and last elements of an array
$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>"; // first
echo end($people);  // last
echo '<br><br>';

# unshift array
$a = array("a" => "red", "b" => "green");
array_unshift($a, "yellow", "blue");
print_r($a);
echo '<br><br>';

# push array
$b = array("red", "green");
array_push($b, "blue", "yellow");
print_r($b);

?>