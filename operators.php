<?php

//ARITHMETIC OPERATORS

// + operator
$x = 10;
$y = 20;
$z = $x + $y;
echo $z."<br>";

// - operator
$x = 10;
$y = 20;
$z = $x - $y;
echo $z."<br>";

// "*" operator
$x = 10;
$y = 20;
$z = $x * $y;
echo $z."<br>";

// "/" operator
$x = 10;
$y = 20;
$z = $x / $y;
echo $z."<br>";

// "%" operator
$x = 10;
$y = 20;
$z = $x % $y;
echo $z."<br>";


// COMPARISON OPERATORS(==,! =, <,>, <=,> =)

$x = 10;
$y = 20;

$x == $y;
$x != $y;
$x < $y;
$x > $y;
$x <= $y;
$x >= $y;

var_dump($x == $y);
var_dump($x != $y);
var_dump($x < $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);


// LOGICAL OPERATORS(&&, ||, !, Xor)

$x = true;
$y = false;

$x && $y;
$x || $y;
!$x;
$x xor $y;

echo "<br>";

var_dump($x && $y);
var_dump($x || $y);
var_dump(!$x);
var_dump($x xor $y);






