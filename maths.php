<?php 
header("Content-type: text/plain");

// Define a variable whose value is the result of the function that returns an absolute value.
$absolute = abs(-1.5);
echo $absolute."\n"; //Return -1.5

// Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
$roundHigh = ceil(1.3);
echo $roundHigh."\n"; //Return 2

// Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
$arrMax = [100, 20, -35,67, 80];
echo max($arrMax)."\n";

// Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
$arrMin = [100, 20, -35,67, 80]; //Return 100
echo min($arrMin)."\n"; //Return -35

// Define a variable whose value is the result of the function that returns a random number
$randonNum = rand(0, 100);
echo $randonNum."\n";
