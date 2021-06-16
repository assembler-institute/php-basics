<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // Var declarations
    $intVar1 = 1;
    $intVar2 = 2;
    $intVar3 = 3;

    // Header 
    echo "<H1> OPERATORS</H1>";

    // Vars used for examples
    echo "<H3> - Vars used for examples</H3>";
    echo "\$intVar1 = $intVar1 <br> \$intVar2 = $intVar2 <br> \$intVar3 = $intVar3 <br>";

    // Create an example of use for arithmetic operators: +, -, *, /, and %
    echo "<H3> - <u>arithmetic operations using basic math operands</u></H3>";
    echo "(\$intVar1 + \$intVar2)/ \$intVar3 = "; echo($intVar1 + $intVar2)/ $intVar3; echo"<br>";
    echo "\$intVar2 * \$intVar3 = "; echo $intVar2 * $intVar3; echo "<br>";
    echo "\$intVar3 % \$intVar2 = "; echo $intVar3 % $intVar2; echo "<br>";

    // Create a usage example for comparison operators: ==,! =, <,>, <=,> =
    echo "<H3> - <u>cpmparison operators</u> allows you to loop over a structure using a key iterator</H3>";
    echo "(\$intVar1 == \$intVar2) => "; var_dump($intVar1 == $intVar2);  echo "<br>";
    echo "(\$intVar1 != \$intVar2) => "; var_dump($intVar1 != $intVar2);  echo "<br>";
    echo "(\$intVar1 < \$intVar2) => "; var_dump($intVar1 < $intVar2);  echo "<br>";
    echo "(\$intVar1 > \$intVar2) => "; var_dump($intVar1 > $intVar2);  echo "<br>";
    echo "(\$intVar1 <= \$intVar2) => "; var_dump($intVar1 <= $intVar2);  echo "<br>";
    echo "(\$intVar1 >= \$intVar2) => "; var_dump($intVar1 < $intVar2);  echo "<br>";

    // Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
    echo "<H3> - <u>logical operators</u> allows you to loop over a structure using a key iterator</H3>";
    echo "(\$intVar1 == \$intVar2 && \$intVar3 == \$intVar2) => "; var_dump($intVar1 == $intVar2 && $intVar3 == $intVar2);  echo "<br>";
    echo "(\$intVar1 != \$intVar2 And \$intVar3 != \$intVar2) => "; var_dump($intVar1 != $intVar2 And $intVar3 != $intVar2);  echo "<br>";
    echo "(\$intVar1 == \$intVar2 || \$intVar3 == \$intVar2) => "; var_dump($intVar1 == $intVar2 || $intVar3 == $intVar2);  echo "<br>";
    echo "(\$intVar1 != \$intVar2 Or \$intVar3 == \$intVar2) => "; var_dump($intVar1 != $intVar2 Or $intVar3 == $intVar2);  echo "<br>";
    echo "(!\$intVar1) => "; var_dump(!$intVar1);  echo "<br>";
    echo "(\$intVar1 == \$intVar2 xor \$intVar3 != \$intVar2) => "; var_dump($intVar1 == $intVar2 xor $intVar3 != $intVar2);  echo "<br>";
    echo "(\$intVar1 != \$intVar2 xor \$intVar3 != \$intVar2) => "; var_dump($intVar1 != $intVar2 xor $intVar3 != $intVar2);  echo "<br>";

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
