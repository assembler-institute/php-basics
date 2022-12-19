<?php

// Function return sum of 2 numbers
function sum($a, $b){
    return $sum = $a + $b;
}

// Function return multiplication of 2 numbers
function multiply($a, $b){
    return $multiply = $a * $b;
}

// Function divide 2 numbers
function divide($a, $b){
    return $divide = $a / $b;
}

// fucntion return rand operation
function calculator($a, $b, $operator){
    switch($operator){
        case '+':
            $result = $a + $b;
            break;
        case '-':
            $result = $a - $b;
            break;
        case '/':
            $result = $a / $b;
            break;
        default:
            $result = "Operator don't allowed";
            break;
    }
    return $result;
}