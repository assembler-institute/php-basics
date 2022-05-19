<?php

    echo "<h1>Operators</h1>";

    $a = 2;
    $b = 5;

    echo "<h3>Arithmetics</h3>";
    
    var_dump($a + $b, $a - $b, $a * $b, $a / $b, $a % $b);

    echo "<h3>Comparators</h3>";
    
    var_dump($a == $b, $a != $b, $a > $b, $a < $b, $a >= $b, $a <= $b);

    echo "<h3>Logical</h3>";

    var_dump($a and $b, $a && $b, $a || $b, $a or $b, $a xor $b, !$a,);
?>