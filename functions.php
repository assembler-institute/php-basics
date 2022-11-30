
<?php

operations(10, 5, "/");

function sum($num1, $num2)
{
    return $num1 + $num2;
}

function multi($num1, $num2)
{
    return $num1 * $num2;
}

function div($num1, $num2)
{
    return $num1 / $num2;
}

function operations($num1, $num2, $op)
{
    switch ($op) {
        case '+':
            echo sum($num1, $num2);
            break;
        case '*':
            echo multi($num1, $num2);
            break;
        case '/':
            echo div($num1, $num2);
            break;
        default:
            break;
    }
}
