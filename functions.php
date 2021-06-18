<?php
// It generates a function that given two numbers returns the sum of both
function sum($num1, $num2)
{
    return $num1 + $num2;
}
// It generates a function that given two numbers returns the multiplication of both
function prod($num1, $num2)
{
    return $num1 * $num2;
}
// It generates a function that given two numbers returns the division of both
function division($num1, $num2)
{
    return $num1 / $num2;
}
// It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function operation($num1, $num2, $operator)
{
    $result = 0;
    switch ($operator) {
        case '+':
            $result = sum($num1, $num2);
            break;
        case '*':
            $result = prod($num1, $num2);
            break;
        case '/':
            $result = division($num1, $num2);
            break;
    }
    return $result;
}
