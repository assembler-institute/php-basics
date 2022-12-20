<?php
    $boolean = true;
    echo "<p>this is a boolean: $boolean</p>";

    $integer = 10;
    echo "<p>this is a integer: $integer</p>";

    $float = 2.5;
    echo "<p>this is a float: $float</p>";

    $string = "Hello";
    echo "<p>this is a string: $string</p> ";

    $arr = array(1, 2, 3 , 4);
    echo "<p>this is an array: ", var_dump($arr), "</p>";

    $obj = (object)["el_1" => "item1", "el_2" => "item2"];
    echo "<p>this is an object: ", var_dump($obj), "</p>";

    $nll = NULL;
    echo "<p>this is a NULL type: $nll</p>"
?>