<?php
var_dump(1 == 2); 
$a = 5;
$b = 3;

echo $a + $b . "<br>"; // Outputs 8
echo $a - $b . "<br>"; // Outputs 2
echo $a * $b . "<br>"; // Outputs 15
echo $a / $b . "<br>"; // Outputs 1.6666666666667
echo $a % $b . "<br>"; // Outputs 2


echo $a == $b . "<br>"; // Outputs false
echo $a != $b . "<br>"; // Outputs true
echo $a < $b . "<br>";  // Outputs false
echo $a > $b . "<br>";


$c = true;
$d = false;

echo ($c && $d) . "<br>"; // Outputs false
echo ($c || $d) . "<br>"; // Outputs true
echo !$c . "<br>";       // Outputs false
echo ($c xor $d) . "<br>"; // Outputs true
?>