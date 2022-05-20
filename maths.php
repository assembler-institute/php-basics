<?php

//Define a variable whose value is the result of the function that returns an absolute value.
$x = -10;
$y = abs($x);
echo $y."<br>";


//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
$x = 10.5;
$y = ceil($x);
echo $y."<br>";

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
$x = 10;
$y = 20;
$z = 30;
$a = max($x, $y, $z);
echo $a."<br>";


//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
$x = 10;
$y = 20;
$z = 30;
$a = min($x, $y, $z);
echo $a."<br>";

//Define a variable whose value is the result of the function that returns a random number
$x = rand(1, 10);
echo $x."<br>";
