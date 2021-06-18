<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Maths</title>
</head>

<body>
    <h1>Maths</h1>
    <?php

    // Define a variable whose value is the result of the function that returns an absolute value.
    echo "<h2>Absolute number</h2>";
    echo '<pre>
    $negative = -9;
    abs($negative);
    </pre>';
    echo "<strong>Result: </strong>";
    $negative = -9;
    echo abs($negative);

    // Define a variable whose value is the result of the function
    // that returns a rounded value to the next highest integer.
    echo "<h2>Rounded number</h2>";
    echo '<pre>
    $rounding = 1.14;
    ceil($rounding);</pre>';
    echo "<strong>Result: </strong>";
    $rounding = 1.14;
    echo ceil($rounding);

    // Define a variable whose value is the result of the function
    // that returns the highest value of a series of values ​​that are received by parameter.
    echo "<h2>The highest value</h2>";
    echo '<pre>
    $numArr = array(1, 16, 24, 42, 6, 38);
    max($numArr);
    max(14, 82, 1040, 16, 1039.99);
    </pre>';
    echo "<strong>Results: </strong><br/>";
    $numArr = array(1, 16, 24, 42, 6, 38);
    echo max($numArr) . "<br/>";
    echo max(14, 82, 1040, 16, 1039.99);

    // Define a variable whose value is the result of the function that returns
    // the lowest value of a series of values ​​that are received by parameter.
    echo "<h2>The lowest value</h2>";
    echo '<pre>
    $numArr = array(-2, 16, 24, 42, 6, 38);
    min($numArr);
    min(14, 82, 1040, 16, 13.6);
    </pre>';
    echo "<strong>Results: </strong><br/>";
    $numArr = array(-2, 16, 24, 42, 6, 38);
    echo min($numArr) . "<br/>";
    echo min(14, 82, 1040, 16, 13.6);

    // Define a variable whose value is the result of the function that returns a random number
    echo "<h2>Random number</h2>";
    echo '<pre>
    rand();
    mt_rand();
    </pre>';
    echo "<strong>Result: </strong><br/>";
    echo rand() . "<br/>";
    echo mt_rand();

    ?>
</body>

</html>