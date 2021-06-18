<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Operators</title>
</head>

<body>
    <h1>Operators</h1>
    <?php

    // Create an example of use for arithmetic operators: +, -, *, /, and %
    echo "<h2>Arithmetic operators</h2>";
    echo '<pre>$result = 10 + 7 - 5 * 3 / 2 % 4;</pre>';
    $result = 10 + 7 - 5 * 3 / 4;
    echo "<strong>Result: </strong>";
    var_dump($result);

    // Create a usage example for comparison operators: ==,! =, <,>, <=,> =
    echo "<h2>Comparison operators</h2>";
    echo "<p><strong>Result: </strong> var_dump(1 == 2) - ";
    var_dump(1 == 2);
    echo "</p><p><strong>Result: </strong> var_dump(3 != 4) - ";
    var_dump(3 != 4);
    echo "</p><p><strong>Result: </strong> var_dump(7 < 2) - ";
    var_dump(7 < 2);
    echo "</p><p><strong>Result: </strong> var_dump(5 > 15) - ";
    var_dump(5 > 15);
    echo "</p><p><strong>Result: </strong> var_dump(2 <= 2) - ";
    var_dump(2 <= 2);
    echo "</p><p><strong>Result: </strong> var_dump(15 >= 5) - ";
    var_dump(15 >= 5);

    // Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
    echo "<h2>Logical operators</h2>";
    echo "<p><strong>Result: </strong> var_dump(true && false) - ";
    var_dump(true && false);
    echo "</p><p><strong>Result: </strong> var_dump(true || false) - ";
    var_dump(true || false);
    echo "</p><p><strong>Result: </strong> var_dump(!false); - ";
    var_dump(!false);
    echo "</p><p><strong>Result: </strong> var_dump(true xor false); - ";
    var_dump(true xor false);

    ?>
</body>

</html>