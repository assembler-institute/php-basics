<?php
//Create an example of use for arithmetic operators: +, -, *, /, and %
$num1= 2;
$num2= 1;
$sum = $num1 + $num2; 
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$rest = $num1 % $num2;
echo $sum, $subtraction, $multiplication, $division, $rest;


//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
$num1= 2;
$num2= 1;

$num1==$num2;
$num1!=$num2;
$num1<$num2;
$num1>$num2;
$num1<=$num2;
$num1>=$num2;


//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
$num1==2 && $num2==1; // && = (and)
$num1==2 || $num2==1; // || = (or)
$num1==2 xor $num2==1; 
!$num1==2 //false

?>