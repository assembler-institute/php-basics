<?php

    print('ITERATORS: <br><br>');
    print(" <hr>");

    print('<strong>FOR LOOP:</strong><br> ');
    for ($i = 0; $i <= 10; $i++) {
        echo("This is day number {$i} <br>");
    }
    print("<br><br> <hr>");

    print('<br><br><br>EXERCISE B: <br>');
    $a = array(1, 2, 3, 17);
    foreach ($a as $v) {
        echo("Current value of \$a: {$v} <br>");
    }

    print('<br><br><br>EXERCISE C: <br>');
    $i = 1;
    while ($i <= 10):
        echo("{$i} <br>");
        $i++;
    endwhile;


    print('<br><br><br>EXERCISE C: <br>');
    $varNum = 0;
    do {
    echo $varNum;
    } while ($varNum > 0);






?>