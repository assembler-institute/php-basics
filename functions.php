<?php

echo "<h3>Create a function that given two numbers returns the sum of both</h3>";

function sum($a, $b) {
    return $a + $b;
}
echo sum(14, 26);
echo "<br>";

echo "<h3>Create a function that given two numbers returns the multiplication of both</h3>";

function multiplication($a, $b) {
    return $a * $b;
}
echo multiplication(14, 3);
echo "<br>";

echo "<h3>Create a function that given two numbers returns the division of both</h3>";

function division($a, $b) {
    return $a / $b;
}
echo division(14, 3);
echo "<br>";

echo "<h3>Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.</h3>";

function operation($a, $operator, $b){
    if($operator == '+'){
        echo sum($a,$b);
    }else if($operator == '*'){
        echo multiplication($a,$b);
    }else if($operator == '/'){
        echo division($a,$b);
    }else{
        echo "Error";
    }
}
operation(3, "+", 4);
echo "<br>";
operation(3, "*", 4);
echo "<br>";
operation(3, "/", 4);

?>