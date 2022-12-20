<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File maths.php</title>
</head>

<body>
    <h1>library of functionalities php</h1>
    <h2>php maths</h2>



    <?php

    var_dump(abs(-4.2));
    echo "<br>";


    echo ceil(4.3) . "<br>";


    function highestValue() {
        $hValue = [12,34,6,132,74,28,131,98];
        return max($hValue);
    }
    echo highestValue() . "<br>";


    function lowestValue() {
        $lValue = [12,34,6,132,74,28,131,98];
        return min($lValue);
    }
    echo lowestValue() . "<br>";


    function randomValue() {
        return rand(1, 10);
    }
    echo randomValue();

    ?>

</body>

</html>