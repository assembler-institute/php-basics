<?php


var_dump(1==2); // returns an explanation of the expression insdie - in this case it's a falsy boolean
echo "<br>";

$a = 2;
$b = 3;

// arithmetic operators

var_dump($a * $b); // returns 3
echo "<br>";
var_dump($b - $a); // returns 1
echo "<br>";
var_dump($a + $b); // returns 5
echo "<br>";
var_dump($b % $a); // returns 1
echo "<br>";
var_dump($b / $a); // returns float 1.5
echo "<br>";

// comparison operators

var_dump(2 == '2'); // returns true, checking for equality
echo "<br>";
var_dump(2 != $b);  // returns true, checking for non equality
echo "<br>";
var_dump(10 < 11);// returns true, less than
echo "<br>";
var_dump(11 > 10); // returns true, greater than
echo "<br>";
var_dump(2 <= 3); // returs ture, less than or equal to
echo "<br>";
var_dump(3 >= 2); // returns true, greater than or equal to
echo "<br>";

// logical operators

if (1 == 1 or $b > $a) { //  reutnrs 1. or can be replaced with ||
  echo '1';
}
echo "<br>";
if (1 == 1 and $b > $a) { // returns 1 as both expression yield true.  and cab be replaced with &&
  echo '1';
}
echo "<br>";
if (1 == 1 xor $b > $a) { // prints nothing, xor is used to check if only one of the expression yields true.
  echo '1';
}
echo "<br>";