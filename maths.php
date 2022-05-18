<?php

//Positive value - Define a variable whose value is the result of the function that returns an absolute value.
echo abs(-5);

echo "<br><br><br>";

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
echo round(3.6);

echo "<br><br><br>";

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
echo max(3,4,10,9,23,4,5,6,7,8,0);

echo "<br><br><br>";

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
echo min(3,4,10 , -1,9,23,4,5,6,7,8,0);


echo "<br><br><br>";

//Define a variable whose value is the result of the function that returns a random number
$min = 1;
$max = 10;
echo rand($min , $max);