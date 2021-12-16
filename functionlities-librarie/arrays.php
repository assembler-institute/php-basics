<?php

//  =====    Define a simple array composed of text strings   ====

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//  =====   Define a simple array consisting of whole numbers and decimal numbers   ====ç

$ages = array(1, 2, 3.3, 5, 6, 7);
echo "My favourite number is ".$ages[5];

//  =====    Define a multidimensional array   ====



//  =====    Execute the function that allows to obtain the length of an array   ====

$cars=array("Volvo","BMW","Toyota");
echo sizeof($cars);

//  =====    Execute the function that allows to obtain the combination of two arrays   ====

$multiDArray = array(
    "A" => array(0 => "red", 2 => "blue", 3 => "green"),
    "B" => array(1 => "orange", 2 => "black"),
    "C" => array(0 => "white", 4 => "purple", 8 => "grey")
    );
    
    echo $multiDArray["A"][3]; // Outputs green
    echo "<br>";
    echo $multiDArray["C"][8]; // Outputs grey

//  =====    Execute the function that once is given an array return the last element of it   ====

$people = array("Peter", "Joe", "Glenn", "Cleveland");
echo current($people) . "<br>";
echo end($people);

//  =====    Execute the function that once is given an array add a new element to the array in question   ====

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

?>