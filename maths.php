<?php

function getAbsoluteValue($num){
    return abs($num);
}

echo getAbsoluteValue(-5) . '<br>';

function getRoundedValue($num){
    return ceil($num);
}

echo getRoundedValue(2.34) . '<br>';

function getHighest($arr){
    return max($arr);
}

echo getHighest([2,5,4,3,6,7,9,2]) . '<br>';

function getLowest($arr){
    return min($arr);
}

echo getLowest([2,5,4,3,6,7,9,2]) . '<br>';

function getRandom($arr){
    return array_rand($arr);
}

echo getRandom([2,5,4,3,6,7,9,2]) . '<br>';

?>