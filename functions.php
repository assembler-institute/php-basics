<?php

#Function sum

function sum($x, $y) {
    return $x + $y;
}

echo sum(2,4);
echo "<br><br>";

#Function multiply

function multiply($x, $y) {
    return $x * $y;
}
echo multiply(2, 4);
echo "<br><br>";

#Function division

function division($x, $y) {
    return $x / $y;
}
echo division(4, 2); 
echo "<br><br>";

#Operation

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