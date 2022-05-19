<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <?php print "hola" ?>
</head>

<body>
    <h2 style='color: red'>Operators </h2>

    <!-- Create an example of use for arithmetic operators: +, -, *, /, and%
    Create a usage example for comparison operators: ==,! =, <,>, <=,> =
    Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor -->

    <?php
    $op1 = 2;
    $op2 = 3;
    print "<h3> Comparison Operators </h3>";
    var_dump($op1 == $op2);
    print "Igualdad 2 == 3";
    print "<hr>";

    var_dump($op1 != $op2);
    print "Desigualdad 2 != 3";
    print "<hr>";

    var_dump($op1 < $op2);
    print "Menor que 2 < 3";
    print "<hr>";

    var_dump($op1 > $op2);
    print "Mayor que 2 > 3";
    print "<hr>";

    var_dump($op1 >= $op2);
    print "Mayor igual que 2 >= 3";
    print "<hr>";

    var_dump($op1 <= $op2);
    print "Menor igual que 2 >= 3";
    print "<hr>";

    print "<h3> Logical Operators </h3>";

    var_dump($op1 > 1  && $op2 > 5);
    print " 2 & 3";
    print "<hr>";

    var_dump($op1 || $op2);
    print " 2 ||  3";
    print "<hr>";

    var_dump($op1 <= $op2);
    print "Menor igual que 2 >= 3";
    print "<hr>";

    var_dump($op1 <= $op2);
    print "Menor igual que 2 <= 3";
    print "<hr>";

    ?>
</body>

</html>