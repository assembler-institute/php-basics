<?php

echo "Function that returns the sum of 2 values: <br>";

function sum ($x, $y){
    return $x + $y;
}
echo (sum(1, 2));

echo "<br><br>";

echo "Function that returns the multiplication of 2 values: <br>";

function mul ($x, $y){
    return $x * $y;
}
echo mul(3, 5);

echo "<br><br>";

echo "Function that returns the division of 2 values: <br>";

function div ($x, $y){
    return $x / $y;
}
echo div(15, 5);

echo "<br><br>";

echo "Function that returns the operation of 2 values depending on operation input ('add', 'multiply'): <br>";

function operation ($x, $y, $operation){
    if ($operation == "add"){
        return $x + $y;   
    } else if($operation == "multiply"){       
        return $x * $y;
    }
}
echo operation(3, 5, "add");

echo "<br><br>";

?>