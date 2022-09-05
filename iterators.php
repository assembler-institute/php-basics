<?php
    #FOR
    
    for ($i = 0; $i < 5; $i++) {
        echo "El número en el bucle es: $i<br>";
    }

    echo "<br>";

    #FOREACH

    $myArray = array (1, 2, 3, 4, 5);

    foreach ($myArray as $value) {
        $value = $value * 5;
        echo $value."<br>";
    }

    echo "<br>";

    #WHILE

    $num = 0;

    while($num<=10) {
        echo $num." ";
        $num++;
    }

    echo "<br>";

    #DO WHILE

    $numero = 10;
    do {
        echo $numero." ";
        $numero--;
    }
    while ($numero >= 0);

?>