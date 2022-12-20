<?php

// get absolute

function getAbsoluteValue($num){
    return abs($num);
}

echo getAbsoluteValue(-5) . '<br>';

function getRoundedValue($num){
    return ceil($num);
}

// get rounded to next integer

echo getRoundedValue(2.34) . '<br>';

//get highest value of array of numbers

function getHighest($arr){
    return max($arr);
}

echo getHighest([2,5,4,3,6,7,9,2]) . '<br>';

//get lowest value of array of numbers

function getLowest($arr){
    return min($arr);
}

echo getLowest([2,5,4,3,6,7,9,2]) . '<br>';

//get random value from array

function getRandom($arr){
    return array_rand($arr);
}

echo getRandom([2,5,4,3,6,7,9,2]) . '<br>';

?>