<?php

echo("<h1>Maths</h1>");
echo ("<hr>");

# Absolute value


$absolute = abs(5.6);
echo ("Absolute value of: 5.6 <br>");
echo("$absolute");

echo ("<hr>");

# Rounded to the highest integer

$roundedHight = ceil(5.6);
echo ("Rounded value to highest integer of: 5.6 <br>");
echo("$roundedHight");

echo ("<hr>");

# Highest value of a series of values

echo ("Highest value of a serie: 9, 4, 7, 1, 2 <br>");
$maxValue = max(9, 4, 7, 1, 2);
echo("$maxValue");

echo ("<hr>");

# Lower value of a series of values

echo ("Lower value of a serie: 9, 4, 7, 1, 2 <br>");
$loweValue = min(9, 4, 7, 1, 2);
echo("$loweValue");

echo ("<hr>");

# Random number

echo ("Random number from 50 to 500: <br>");
$randomNumber = rand(50, 500);
echo("$randomNumber");


?>