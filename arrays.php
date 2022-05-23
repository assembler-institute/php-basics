<?php

$array = ["one", "two", "three"];

$numbers = [1, 10, 45, 1.3, 4.6, 34];

$numbers2 = [2, 3.5, 6];

$cars = [
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
];

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

echo count($numbers) . "<br>"; // return 6 (1 until 6)

var_dump(array_merge($array, $numbers)) . "<br>";

var_dump(array_combine($array, $numbers2)); //array = keys, numbers2 = values

echo "<br>";

echo end($numbers) . "<br>"; //return las element of array

echo array_push($numbers, 250) . "<br>";

var_dump($numbers);

