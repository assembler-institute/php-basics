<?php
// Arithmetic operators
echo "<p>Arithmetic operators<p>";

$addition = 3 + 5;
$subtraction = 6 - 2;
$multiplication = 4 * 3;
$division = 10 / 2;
$modulor = 15%4;

echo "Addition: $addition <br>Subtraction: $subtraction <br>Multiplication: $multiplication <br>Division: $division <br>Modulor: $modulor <br>";

// Comparison operators
echo "<p>Comparison operators<p>";

echo "Equal: 1==1 ", var_dump(1==1), "<br>";
echo "Not equal: 1!=1 ", var_dump(1!=1), "<br>";
echo "Less than: 1<2 ", var_dump(1<2), "<br>";
echo "Greater than: 1>2 ", var_dump(1>2), "<br>";
echo "Less or equal than: 1<=2 ", var_dump(1<=2), "<br>";
echo "Greater or equal than: 1>=2 ", var_dump(1>=2), "<br>";

// Logical operators
echo "<p>Logical operators<p>";

echo "true && true: ", var_dump(true && false), "<br>";
echo "true || false: ", var_dump(true || false), "<br>";
echo "!false: ", var_dump(!false), "<br>";
echo "false xor true: ", var_dump(false xor true), "<br>";
?>