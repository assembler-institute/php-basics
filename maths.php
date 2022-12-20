<?php
    echo "<h1>mathematical operators</h1>";

    #absolute value
    $absValue = abs(-5);
    echo "<p>The absolute value of -5 is $absValue</p>";

    #rounded value
    $roundedValue = ceil(2.5);
    echo "<p>The rounded value to the next highest integer of 2.5 is $roundedValue</p>";

    $maxValue = max(3, 4, 9, 1, 7);
    echo "<p>The maximum value of (3, 4, 9, 1, 7) is $maxValue</p>";

    $minValue = min(3, 4, 9, 1, 7);
    echo "<p>The minimum value of (3, 4, 9, 1, 7) is $minValue</p>";

    $randNum = rand();

    echo "A random number: $randNum";
?>