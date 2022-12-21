<?php

#Create a function that given two numbers returns the sum of both

function sum(int $x, int $y)
{
    return $x + $y;
}

echo sum(10, 25);

echo "<br>";

#Create a function that given two numbers returns the multiplication of both

function multiply(int $a, int $b) {
    
    return $a * $b;
    }

echo multiply(10, 10);

echo "<br>";

#reate a function that given two numbers returns the division of both

function division(int $c, int $d) {

    return $c / $d;
}
echo division(20, 5);

echo "<br>";

#Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.

function operation ($f, $g, $operation){
    if($operation == "multiply"){       
        return $f * $g;
    }
}

echo operation(3, 5, "multiply");

?>