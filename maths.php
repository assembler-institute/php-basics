<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths.php</title>
</head>
<body>
    <h2>Maths</h2>
    <!-- https://www.php.net/manual/es/ref.math.php -->

    <?php

    $absNum = abs(-78);
    echo $absNum;
    echo "<br/>";

    $roundNumHigh = ceil(45.3);
    echo $roundNumHigh;
    echo "<br/>";

    $maxValue = max(23, 12, 43, 1, 63, 197, 52, 3);
    echo $maxValue;
    echo "<br/>";

    $minValue = min(23, 12, 43, 1, 63, 197, 52, 3);
    echo $minValue;
    echo "<br/>";

    $randomNum = rand(1, 50);
    echo $randomNum;
    echo "<br/>";

    ?>

</body>
</html>