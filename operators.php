<?php

// * var_dump
// returns type of variable (string, integer, float, array...) (like typeof on javascript)
// compares two numbers and return true or false

$num1 = 10;
$num2 = 7;

echo ("<p>$num1 + $num2 = " .$num1+$num2. "</p>");
echo("<p>$num1 - $num2 = " .$num1-$num2. "</p>");
echo("<p>$num1 * $num2 = " .$num1*$num2. "</p>");
echo("<p>$num1 / $num2 = " .$num1/$num2. "</p>");
echo("<p>$num1 % $num2 = " .$num1%$num2. "</p>");

echo("<hr>");
echo("<h2>Comparision operators</h2>");

echo ("<p>10 == 10<p>");
echo var_dump(10==10);

echo("<p>10 != 10</p>");
echo var_dump(10!=10);

echo("<p>7 < 10</p>");
echo var_dump(7<10);

echo ("<p>7 > 10</p>");
echo var_dump(7>10);

echo ("<p>1926 >= 1926</p>");
echo var_dump(1926>=1926);

echo ("<p>1984 <= 1926</p>");
echo var_dump(1984<= 1926);

?>