<?php
// Create an example of use for arithmetic operators: +, -, *, /, and%
$sum = 1+2;
echo var_dump(1+2);
echo "<p>$sum<p>";

$sub = 1-2;
echo var_dump(1-2);
echo "<p>$sub<p>";

$div = 1/2;
echo var_dump(1/2);
echo "<p>$div</p>";

$resto = 10%2;
echo var_dump(10%2);
echo "<p>$resto</p>";

// Create a usage example for comparison operators: ==,! =, <,>, <=,> =
echo var_dump(1 == 2);
echo var_dump(1!=2);
echo var_dump(1<2);
echo var_dump(1>2);
echo var_dump(1<=2);
echo var_dump(1>=2);

// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
$a = "hey";
$b = "h";
$c = "ey";
$d = "yeh";
echo var_dump($a = $b && $c);
echo var_dump($a = $b and $c);
echo var_dump($a = $b || $c);
echo var_dump($a = $b or $c);
echo var_dump($a = !$d);

?>
