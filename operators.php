<?php

$a = 4;
$b = 7;

var_dump($a + $b, $a - $b, $a * $b, $a / $b, $a % $b);
echo ($a == $b);
echo "<br><br>";

var_dump($a == $b,$a != $b,$a < $b,$a > $b,$a <= $b,$a >= $b);
echo ($a == $b);
echo "<br><br>";

var_dump($a && $b,$a and $b,$a || $b,$a or $b,! $b,$a xor $b);
echo ($a == $b);

?>