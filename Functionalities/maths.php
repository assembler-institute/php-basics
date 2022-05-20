<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths</title>
</head>
<body>
    <!-- 
    Define a variable whose value is the result of the function that returns an absolute value.
    Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
    Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
    Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
    Define a variable whose value is the result of the function that returns a random number
     -->
    <?php
    $a = abs(-2);
    echo $a;
    echo '<br>';

    $b = ceil(3.14159265);
    echo $b;
    echo '<br>';

    $c = max(2, 4, 9, 25, 6, 98, 3);
    echo $c;
    echo '<br>';

    $d = min(2, 4, 9, 25, 6, 98, 3);
    echo $d;
    echo '<br>';

    $e = rand(1, 100);
    echo $e;
    echo '<br>';

    ?>
    
</body>
</html>