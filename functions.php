<?php

// Functions in PHP


// Create function returns sum of two give numbers
function add($a, $b) {
    echo $a + $b;
}
add(3,2);

echo '<br><br>';

// Create function that returns multiplication of two given numbers
function multiply($a, $b) {
    echo $a * $b;
}
multiply(4, 5);

echo '<br><br>';

// Create function that returns division of two given numbers
function divide($a, $b) {
    echo $a / $b;
}
divide(18, 6);

echo '<br><br>';

// Create function that returns result of operation, with params for two numbers and operation type: add, multiply, divide
function operate($a, $b, $opType) {
    $opType($a, $b);
}
operate(4, 5, 'divide');



