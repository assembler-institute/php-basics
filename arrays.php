<?php

//Define a simple array composed of text strings
$array = array("Hello ", "Assembler ", "Team!");
print_r($array);
echo "<br>";

//Define a simple array consisting of whole numbers and decimal numbers
$array = array(1, 1.1, 2, 3.14);
print_r($array);
echo "<br>";


//Define a multidimensional array
$people = array(
    "Víctor" => array(
        "name" => "Víctor",
        "age" => "27",
        "country" => "Spain"
    ),
    "Juan" => array(
        "name" => "Juan",
        "age" => "25",
        "country" => "Spain"
    ),
    "Pedro" => array(
        "name" => "Pedro",
        "age" => "30",
        "country" => "Spain"
    )
);
print_r($people);
echo "<br>";


//Execute the function that allows to obtain the length of an array
$array = array("Hello ", "Assembler ", "Team!");
$arrayLength = count($array);
print $arrayLength . "<br>";

//Execute the function that allows to obtain the combination of two arrays
$array1 = array("Hello ", "Assembler ", "Team!");
$array2 = array("How ", "are ", "you?");
$array3 = array_merge($array1, $array2);
print_r($array3);
echo "<br>";


//Execute the function that once is given an array return the last element of it
$array = array("Hello ", "Assembler ", "Team!");
$lastElement = end($array);
print $lastElement . "<br>";


//Execute the function that once is given an array add a new element to the array in question
$array = array("Hello ", "Assembler ", "Team!");
array_push($array, ":)");
print_r($array);
echo "<br>";
