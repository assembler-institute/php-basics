<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File iterators.php</title>
</head>

<body>
    <h1>library of functionalities php</h1>
    <h2>php iterators using "for"</h2>

    <?php

    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo " ";
    }

    echo "<br>";

    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
        echo " ";
    }

    echo "<br>";

    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        echo " ";
        $i++;
    }

    echo "<br>";

    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, print " ", $i++);


    ?>



    <br><br>
    <h2>php iterators using "forEach"</h2>

    <?php

    $a = array(1, 2, 3, 17);

    foreach ($a as $v) {
        echo "Valor actual de \$a: $v.\n";
    }
    echo "<br>";


    $a = array(1, 2, 3, 17);

    $i = 0;

    foreach ($a as $v) {
        echo "\$a[$i] => $v.\n";
        $i++;
    }
    echo "<br>";


    $a = array(
        "uno" => 1,
        "dos" => 2,
        "tres" => 3,
        "diecisiete" => 17
    );

    foreach ($a as $k => $v) {
        echo "\$a[$k] => $v.\n";
    }
    echo "<br>";


    $a = array();
    $a[0][0] = "a";
    $a[0][1] = "b";
    $a[1][0] = "y";
    $a[1][1] = "z";

    foreach ($a as $v1) {
        foreach ($v1 as $v2) {
            echo "$v2\n";
        }
    }
    echo "<br>";


    foreach (array(1, 2, 3, 4, 5) as $v) {
        echo "$v\n";
    }

    ?>



    <br><br>
    <h2>php iterators using "while"</h2>

    <?php

    $i = 1;
    while ($i <= 10) {
        echo $i++;
        echo " ";
    }
    echo "<br>";


    $i = 1;
    while ($i <= 10) :
        echo "$i\n";
        $i++;
    endwhile;

    ?>



    <br><br>
    <h2>php iterators using "do while"</h2>

    <?php

    $i = 1;

    do {
        echo "The number is: $i <br>";
        $i++;
    } while ($i <= 5);

    ?>

</body>

</html>