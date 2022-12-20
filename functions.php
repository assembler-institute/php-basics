<?php

#FUNCTION SUM

function sum($x, $y) {
    return $x + $y;
}

echo sum(2,4);
echo "<br><br>";

#FUNCTION MULTIPLICATION

function multiply($x, $y) {
    return $x * $y;
}
echo multiply(2, 4);
echo "<br><br>";


#FUNCTION DIVISION

function division($x, $y) {
    return $x / $y;
}
echo division(4, 2); 
echo "<br><br>";



#OPERATION

function operation($x, $y, $op)
{
    switch ($op) {
        case "+":
            return sum($x, $y);
            break;
        case "*":
            return multiply($x, $y);
            break;
        case "/":
            return division($x, $y);
            break;
        default:
            return "Error";
            break;
    }
}

echo operation(4, 2, "/");
echo "<br><br>";





?>