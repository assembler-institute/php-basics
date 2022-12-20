<?php
    echo "<h1>Iterators</h1>";

    for($i = 0; $i < 10; $i++) {
        print $i;
    }

    print "<br>";
    
    $arr = array("David", "Moina", 0 , 1);

    foreach($arr as $value) {
        echo "$value <br>";
    }

    print "<br>";

    $number = 0;

    while ($number <= 10) {
        echo "$number ";
        $number++;
    }

    print "<br>";

    $ej = 10;

    do {
        echo "$ej ";
        $ej--;
    } while($ej > 0);

?>