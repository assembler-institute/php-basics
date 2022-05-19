<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators.php</title>
</head>
<body>
    <h1>Operators</h1>
<!--
Create a file called operators.php in this case you will need to use the
var_dump PHP function which is to debug variables. So you can do:
var_dump(1 == 2);

- Create an example of use for arithmetic operators: +, -, *, /, and%
- Create a usage example for comparison operators: ==,! =, <,>, <=,> =
- Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
-->

    <?php

    $a = 5;
    $b = 9;

    print "<strong>Arithmetic Operators:</strong>";
    echo "<br/>";
    /* Create an example of use for arithmetic operators: +, -, *, /, and % */

    print "Addiction:<br/>";
    var_dump($a + $b);
    echo "<br/>";
    echo "<br/>";

    print "Subtraction:<br/>";
    var_dump($a - $b);
    echo "<br/>";
    echo "<br/>";

    print "Multiplication:<br/>";
    var_dump($a * $b);
    echo "<br/>";
    echo "<br/>";

    print "Division:<br/>";
    var_dump(intdiv($b, $a));
    echo "<br/>";
    echo "<br/>";
    
    print "Modulo:<br/>";
    var_dump($a % $b);
    echo "<br/>";
    echo "<br/>";

    print "<strong>Comparison Operators:</strong>";
    echo "<br/>";
    /* - Create a usage example for comparison operators: ==,! =, <,>, <=,> = */

    $c = 6;
    $d = 8;

    print "Equal:<br/>";
    var_dump($c == $d);
    echo "<br/>";
    echo "<br/>";

    print "Not equal:<br/>";
    var_dump($c != $d);
    echo "<br/>";
    echo "<br/>";

    print "Less than:<br/>";
    var_dump($c < $d);
    echo "<br/>";
    echo "<br/>";
    
    print "Greater than:<br/>";
    var_dump($c > $d);
    echo "<br/>";
    echo "<br/>";
    
    print "Less than or equal to:<br/>";
    var_dump($c <= $d);
    echo "<br/>";
    echo "<br/>";
    
    print "Greater than or equal to:<br/>";
    var_dump($c >= $d);
    echo "<br/>";
    echo "<br/>";

    print "<strong>Logical Operators:</strong>";
    echo "<br/>";
    /* - Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor */

    $e = 15;
    $f = 18;

    print "Operator 'And':<br/>";
    var_dump($e && $f);
    echo "<br/>";
    echo "<br/>";

    print "Operator 'And':<br/>";
    var_dump($e and $f);
    echo "<br/>";
    echo "<br/>";

    print "Operator 'Or':<br/>";
    var_dump($e || $f);
    echo "<br/>";
    echo "<br/>";

    print "Operator 'Or':<br/>";
    var_dump($e or $f);
    echo "<br/>";
    echo "<br/>";

    print "Operator 'Not':<br/>";
    var_dump(!$f);
    echo "<br/>";
    echo "<br/>";

    print "Operator 'Xor':<br/>";
    var_dump($e xor $f);
    echo "<br/>";
    echo "<br/>";



    ?>
    
</body>
</html>