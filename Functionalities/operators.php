<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <!-- 
    Create an example of use for arithmetic operators: +, -, *, /, and%
    Create a usage example for comparison operators: ==,! =, <,>, <=,> =
    Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
     -->
    <?php

        $a = array(1, 2, array("a", "b", "c"));
        var_dump($a);

        $a = 2;
        $b = 5;
        
        echo '<br>';
        echo '-------';
        echo '<br>';

        echo ($a + $b);
        echo '<br>';
        var_dump ($a - $b);
        echo '<br>';
        var_dump ($a * $b);
        echo '<br>';
        var_dump (intdiv($a , $b));
        echo '<br>';
        var_dump ($a % $b);
        echo '<br>';

        echo '<br>';
        echo '-------';
        echo '<br>';

        //Comparison operators

        echo ($a == $b);
        echo '<br>';
        var_dump ($a != $b);
        echo '<br>';
        var_dump ($a < $b);
        echo '<br>';
        var_dump ($a > $b);
        echo '<br>';
        var_dump ($a <= $b);
        echo '<br>';
        var_dump ($a >= $b);
        echo '<br>';

        
        echo '<br>';
        echo '-------';
        echo '<br>';

        //Logical operators
        var_dump ($a && $b);
        echo '<br>';
        var_dump ($a and $b);
        echo '<br>';
        var_dump ($a || $b);
        echo '<br>';
        var_dump ($a or $b);
        echo '<br>';
        var_dump (! $b);
        echo '<br>';
        var_dump ($a Xor $b);
        echo '<br>';

    ?>
</body>
</html>