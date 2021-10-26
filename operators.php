<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators PHP</title>
</head>

<body>
    <div>
        <h2>Create an example of use for arithmetic operators: +, -, *, /, and %</h2>
        <p><?php
            echo "10 + 2 = ";
            var_dump(10 + 2);
            echo "</br>";

            echo "10 - 2 = ";
            var_dump(10 - 2);
            echo "</br>";

            echo "10 * 2 = ";
            var_dump(10 * 2);
            echo "</br>";

            echo "10 / 2 = ";
            var_dump(10 / 2);
            echo "</br>";

            echo "10 % 2 = ";
            var_dump(10 % 2);
            echo "</br>";
            ?></p>
    </div>
    <div>
        <h2>Create a usage example for comparison operators: ==,!=, <,>, <=,>=</h2>
        <p><?php
            echo "10 == 2 ? ";
            var_dump(10 == 2);
            echo "</br>";

            echo "10 != 2 ? ";
            var_dump(10 != 2);
            echo "</br>";

            echo "10 < 2 ? ";
            var_dump(10 < 2);
            echo "</br>";

            echo "10 > 2 ? ";
            var_dump(10 > 2);
            echo "</br>";

            echo "10 <= 2 ? ";
            var_dump(10 <= 2);
            echo "</br>";

            echo "10 >= 10 ? ";
            var_dump(10 >= 10);
            echo "</br>";

            ?></p>
    </div>
    <div>
        <h2>Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor</h2>
        <p><?php
            echo "10 > 2 && 5 > 8 ? ";
            var_dump(10 > 2 && 5 > 8);
            echo "</br>";

            echo "10 > 2 And 5 > 8 ? ";
            var_dump(10 > 2 and 5 > 8);
            echo "</br>";

            echo "10 > 2 || 5 > 8 ? ";
            var_dump(10 > 2 || 5 > 8);
            echo "</br>";

            echo "10 > 2 Or 5 > 8 ? ";
            var_dump(10 > 2 or 5 > 8);
            echo "</br>";

            echo "!10 > 2 ? ";
            var_dump(!10 > 2);
            echo "</br>";

            echo "10 > 2 Xor 8 > 5 ? ";
            var_dump(10 > 2 xor 8 > 5);
            echo "</br>";



            ?></p>
    </div>



</body>

</html>