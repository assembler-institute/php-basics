<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File arrays.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>
    <h2>php arrays</h2>

    <?php

    $simpleArrString = array("hello", "there", "all", "good",);

    $simpleArrNumDec = array(12, 3.14, 65, 34, 2.4);

    $multidimensArr = array(
        array("Hello", 1),
        array("Hello", 2),
        array("Hello", 3),
    );

    var_dump(count($simpleArrString));
    echo "<br>";

    $simpleArrs = $simpleArrString + $simpleArrNumDec;
    var_dump($simpleArrs);
    echo "<br>";

    echo end($simpleArrString);
    echo "<br>";

    array_push($simpleArrNumDec, 123, 456, 789);
    print_r($simpleArrNumDec);

    ?>

</body>

</html>