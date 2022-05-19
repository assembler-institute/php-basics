<?php
    print "<h1>Iterators</h1>";

    print "<br><h3>for</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    };

    echo "<br><h3>foreach</h3>";

    $array = array(1, 2, 3, 4);
        foreach ($array as &$valor) {
            $valor = $valor * 3;
            echo " ",$valor;
        };

    echo "<br><h3>while</h3>";
    $i=1;
    while ( $i < 20 ){
    echo " ",$i;
    $i = $i*2;
    }

    echo "<h3>do-while</h3>";
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);

    // Don`t do anything because i is not greater than 0

?>