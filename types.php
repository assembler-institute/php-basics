<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File types.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>
    <h2>php types</h2>



    <?php

    var_dump((bool) "0");
    echo "<br>";

    $million = 1000000;
    $integer =  50000000000000 * $million;
    var_dump($integer);
    echo "<br>";


    $a = "1234.56789";
    echo floatval($a) . "<br>";


    echo 'Arnold once said: "I\'ll be back"' . "<br>";


    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );
    var_dump($array);
    echo "<br>";


    $obj = (object) array('1' => 'foo');
    var_dump(isset($obj->{'1'}));
    echo "<br>";


    $var = NULL;
    echo "<code>\$var = null;</code>"

    ?>

</body>

</html>