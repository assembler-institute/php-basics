<?php

//Create a function that given two numbers returns the sum of both
function sum($num1, $num2) {
    echo $num1 + $num2;
}
sum(2, 3);
echo "<br>";


//Create a function that given two numbers returns the multiplication of both
function multiply($num1, $num2) {
    echo $num1 * $num2;
}
multiply(2, 3);
echo "<br>";


//Create a function that given two numbers returns the division of both
function divide($num1, $num2) {
    echo $num1 / $num2;
}
divide(2, 3);
echo "<br>";
echo "<br>";


//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
function operation($num1, $num2, $operation) {
    if ($operation == "add") {
        echo $num1 + $num2;
    } elseif ($operation == "multiply") {
        echo $num1 * $num2;
    } elseif ($operation == "divide") {
        echo $num1 / $num2;
    }
}
operation(2, 3, "add");
echo "<br>";
operation(2, 3, "multiply");
echo "<br>";
operation(2, 3, "divide");
echo "<br>";

