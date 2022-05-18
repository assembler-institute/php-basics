<?php
    $abs = abs(-3);
    echo "The absolute of -3 is: $abs \n";

    $nextNum = ceil(1.3);
    echo "Rounded value to the next highest integer from 1.3: $nextNum \n";

    $arr = [1, 2, 3, 4, 5];
    $max = max($arr);
    echo "Highest value of the array: $max \n";

    $arr = [1, 2, 3, 4, 5];
    $min = min($arr);
    echo "Lowest value of the array: $min \n";

    $rand = rand(0, 10);
    echo "Random integer between 0 and 10: $rand";
?>
