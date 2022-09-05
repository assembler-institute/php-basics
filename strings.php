<?php

    echo "text";
    echo "<hr>";

    $a = "more";
    echo "$a text"; // more text
    echo "<hr>";

    echo $a . " and $a text"; // more and more text
    echo "<hr>";

    $b = "This is a silly example";
    echo str_replace("silly", "test", $b); // <-- This is a test example (Replace is case sensitive)
    echo "<hr>";

    $b = "This is a SILLY example";
    echo str_ireplace("silly", "test", $b); // <-- This is a test example (Ireplace is case INsensitive)
    echo "<hr>";

    $c = "this is some text, ";
    echo str_repeat($c, 3); // <-- this is some text, this is some text, this is some text, 
    echo "<hr>";

    echo "'$a' is " . strlen($a) . " characters long"; //<-- 'more' is 4 characters long 
    echo "<hr>";

    echo strpos($a, "o"); // <-- 1
    echo "<hr>";

    $A = strtoupper($a);
    echo $A; // <-- MORE
    echo "<hr>";

    echo strtolower($A); // <-- more
    echo "<hr>";

    echo substr($a, -2); // <-- re 
    echo "<hr>";

?>