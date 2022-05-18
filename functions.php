<?php

// Create a function that given two numbers returns the sum of both
function sum($a,$b) {return $a + $b; };

// Create a function that given two numbers returns the multiplication of both
function mul($a, $b){ return $a * $b; };

// Create a function that given two numbers returns the division of both
function div($a, $b){ return $a / $b; };

// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function calc($a, $b, $operator){
    switch ($operator) {
        case "+":
            echo sum($a, $b);
            break;
        case "*":
            echo mul($a,$b);
            break;
        case "/":
            echo div($a,$b);
            break;
    }
};