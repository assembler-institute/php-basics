<?php
    echo "for\n";
    for ($i = 1; $i <= 5; $i++) {
        echo "$i\n";;
    }

    echo "foreach\n";
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $num) {
        echo "$num\n";
    }

    echo "while\n";
    $i = 1;
    while ($i <= 5) {
        echo $i++ . "\n";
    }

    echo "do-while\n";
    $i = 1;
    do {
        echo $i++ . "\n";
    } while ($i <= 5);
?>