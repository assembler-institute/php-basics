<?php
    echo "<h1>Operators</h1>";
    
    #arithmetic operators
    print "<h3>arithmetic operators</h3>";

    echo "5 + 5 = ",var_dump(5 + 5), "<br>";

    echo "9 - 3 = ",var_dump(9 - 3), "<br>";

    echo "3 * 10 = ",var_dump(3 * 10), "<br>";
    
    echo "30 / 3 = ",var_dump(30 / 3), "<br>";
    
    echo "20 % 2 = ",var_dump(20 % 2), "<br>";

    #comparison operators
    print "<h3>comparison operators</h3>";

    echo "(1 == 2) = ",var_dump(5 + 5), "<br>";

    echo "(4 != 5) = ",var_dump(4 != 5), "<br>";

    echo "(3 < 5) = ",var_dump(3 < 5), "<br>";

    echo "(3 > 5) = ",var_dump(3 > 5), "<br>";

    echo "(5 <= 5) = ",var_dump(5 <= 5), "<br>";

    echo "(5 >= 6) = ",var_dump(5 >= 6), "<br>";

    #logical operators
    print "<h3>logical operators</h3>";

    $a = false;
    $b = true;

    echo "a = false, b = true <br>";

    echo "(a && b) = ", var_dump($a && $b), "<br>";

    echo "(a and b) = ", var_dump($a and $b), "<br>";

    echo "(a || b) = ", var_dump($a || $b), "<br>";

    echo "(a or b) = ", var_dump($a or $b), "<br>";

    echo "(!a) = ", var_dump(!$a), "<br>";
?>