<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Create an example of use for arithmetic operators: +, -, *, /, and%
echo '<h5>Arithmetic operators</h5>';
$x = 10;
$y = 6;
echo "$x + $y = " . $x + $y, '<br>';
echo "$x - $y = " . $x - $y, '<br>';
echo "$x x $y = " . $x * $y, '<br>';
echo "$x / $y = " . $x / $y, '<br>';
echo "$x % $y = " . $x % $y, '<br>';

// Create a usage example for comparison operators: ==,! =, <,>, <=,> =
echo '<h5>Comparison operators</h5>';
$x = 100;
$y = "100";
echo "$x == $y ", var_dump($x == $y), '<br>';
echo "$x != $y ", var_dump($x != $y), '<br>';
echo "$x < $y ", var_dump($x < $y), '<br>';
echo "$x > $y ", var_dump($x > $y), '<br>';
echo "$x >= $y ", var_dump($x >= $y), '<br>';
echo "$x <= $y ", var_dump($x <= $y), '<br>';

// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); 
echo '<h5>Logical operators</h5>';
$x = 100;
$y = 50;
if ($x == 100 && $y == 50) echo 'x = 100 and y = 50,  ';
if ($x == 100 and $y == 50) echo 'x = 100 and y = 50 <br>';
if ($x == 100 and $y || 50) echo 'x = 100 or y = 50,  ';
if ($x == 100 and $y or 50) echo 'x = 100 or y = 50 <br>';
if ($x != 50) echo 'x != 50 <br>';

require_once('../foot.php');
