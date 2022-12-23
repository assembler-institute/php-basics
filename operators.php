<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File operators.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>

    <?php

    var_dump(1 == 2)

    ?>

    <h2>php arithmetic operators</h2>

    <?php

    $a = 3 * 3 % 5;
    echo $a;
    echo "<br>";


    $b = 1;
    $c = 2;
    echo $b = $c += 3;
    echo "<br>";


    $d = 1;
    echo $d + $d++;
    echo "<br>";

    ?>



    <br><br>
    <h2>php comparison operators</h2>

    <?php

    echo 2 <=> 1;
    echo "<br>";


    echo 2.5 <=> 1.5;
    echo "<br>";


    echo "b" <=> "a";
    echo "<br>";


    echo "zz" <=> "aa";
    echo "<br>";


    echo [1, 2, 3] <=> [1, 2, 4];
    echo "<br>";


    $a = (object) ["a" => "c"];
    $b = (object) ["a" => "b"];
    echo $a <=> $b;

    ?>



    <br><br>
    <h2>php logical operators</h2>

    <?php
    
    function foo() {
        return 1;
    }

    $a = (false && foo());
    $b = (true  || foo());
    $c = (false and foo());
    $d = (true  or  foo());

    $e = false || true;

    $f = false or true;

    var_dump($e, $f);

    $g = true && false;

    $h = true and false;

    var_dump($g, $h);

    ?>

</body>

</html>