<?php

$stringArray = ['Hola', 'que', 'tal'];
$numberArray = [10,1.4,3];
$multiArray = [
    [1,2,3],
    ['Julio', 'Alejandro']
];

$arrayLenght = count($numberArray);

$colors = array('green', 'red', 'yellow');
$fruits = array('avocado', 'apple', 'banana');
$combinedArray = array_combine($colors, $fruits);

var_dump($combinedArray);

print end($colors);

$voidArray = [];

array_push($voidArray, 'hola', 'que', 'tal');

var_dump($voidArray);