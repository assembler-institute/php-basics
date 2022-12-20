<?php

#BOOLEAN

$x = true;
$y = false;

echo "<br><br>";

#INTEGRER - non decimal number between -2,147,483,648 and 2,147,483,647

$x = 5985;
var_dump($x);

echo "<br><br>";

#FLOAT -  is a number with a decimal point or a number in exponential form

$x = 10.365;
var_dump($x);

echo "<br><br>";


#STRING

echo 'this is a simple string';

echo "<br><br>";

#ARRAY 

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

$array = [
    "foo" => "bar",
    "bar" => "foo",
];

echo "<br><br>";

#OBJECT

$fruits = (object)[
    "fruit 1" => "mango",
    "fruit 2" => "apple",
    "fruit 3" => "kiwi",
];

var_dump($fruits);

echo "<br><br>";


#NULL

$x = "Hello world!";
$x = null;
var_dump($x);

echo "<br><br>";



?>