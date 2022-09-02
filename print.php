<?php

    $a = "Testing PHP";
    print $a;
    echo "$a <br><br>" . $a; // Starts adjacent to previous "print"

    echo "<hr>";

    function test() {
        $b = 2;
        return $a + $b; 
    }
    echo test(); // Drops error because $a is not in the scope of the function 
    // BUT gives "2" stored in $b

    echo "<hr>";

    $b = ["This is a test", 2, true];

    echo "<pre>";
    print_r($b); 
    echo "</pre>";

?>
