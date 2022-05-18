<?php

echo("<h1>math functions on PHP</h1>");

$num1 = -77.89;
echo("<h2>Absolute value</h2>");
echo("<p>The absolute value of $num1 is " .abs($num1). "</p>");
echo("<hr>");

$num2 = 7.5;
echo("<h2>Rounded value to the next highest integer</h2>");
echo("<p>The rounded value of $num2 is " .round($num2). "</p>");
echo("<hr>");

$numbersArr = array (3,2,7,9);
echo("<h2>The highest value of an array</h2>");
echo("<p>The highest value of an array (3,2,7,9) is " .max($numbersArr). "</p>");
echo("<hr>");

echo("<h2>The lowest value of an array</h2>");
echo("<p>The lowest value of an array (3,2,7,9) is " .min($numbersArr). "</p>");
echo("<hr>");

echo("<h2>Random number</h2>");
echo("<p>Rando number: " .rand(). "</p>");

?>