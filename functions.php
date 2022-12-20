<?php
function sum($a, $b)
{
    return $a + $b;
}

echo sum(1, 2) . "<br>";

function substract($a, $b)
{
    return $a - $b;
}

echo substract(1, 2) . "<br>";

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply(1, 2) . "<br>";

function divide($a, $b)
{
    return $a / $b;
}

echo divide(1, 2) . "<br>";

function calculate($num1, $num2, $operation)
{
    switch ($operation) {
        case '+':
            echo sum($num1, $num2) . '<br>';
            break;
        case '-':
            echo substract($num1, $num2) . '<br>';
            break;
        case '*':
            echo multiply($num1, $num2) . '<br>';
            break;
        case '/':
            echo divide($num1, $num2) . '<br>';
            break;

        default:
            echo 'This is not a valid operation <br>';
            break;
    }
}

calculate(2, 3, '+');
calculate(2, 3, '-');
calculate(2, 3, '*');
calculate(2, 3, '/');
