<?php
// Create a function that given two numbers returns the sum of both
function sum($x, $y) {
    return $x + $y;
}

// Create a function that given two numbers returns the multiplication of both
function multiply($x, $y) {
    return $x * $y;
}

// Create a function that given two numbers returns the division of both
function divide($x, $y) {
    return $x / $y;
}

// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation
function calculate($x, $y, $operation) {
    switch ($operation) {
        case "add":
            return sum($x, $y);
        case "multiply":
            return multiply($x, $y);
        case "divide":
            return divide($x, $y);
        default:
            return "Invalid operation";
    }
}

// Test the calculate function
echo calculate(1, 2, "add"); // Outputs 3
echo calculate(3, 4, "multiply"); // Outputs 12
echo calculate(6, 2, "divide"); // Outputs 3
echo calculate(5, 6, "subtract"); // Outputs "Invalid operation"


?>