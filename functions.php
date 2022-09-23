<?php
header("Content-type: text/plain");
// Create a function that given two numbers returns the sum of both
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

// Create a function that given two numbers returns the multiplication of both
function multiplyNumbers($num1, $num2)
{
    return $num1 * $num2;
}

// Create a function that given two numbers returns the division of both
function divideNumbers($num1, $num2)
{
    return $num1 / $num2;
}

// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function multOperations($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            return addNumbers($num1, $num2);
            break;

        case '*':
            return multiplyNumbers($num1, $num2);
            break;

        case '/':
            return divideNumbers($num1, $num2);
            break;

        default:
        return null;
            break;
    }
}
