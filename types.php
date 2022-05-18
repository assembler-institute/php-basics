<?php
    // Boolean
    $bool = True;
    echo $bool . "\n";

    // Integer
    $int = 5;
    echo $int  . "\n";

    // Float
    $float = 3.1416;
    echo $float  . "\n";

    // String
    $string = "Hello";
    echo $string  . "\n";

    // Array
    $arr = ["a" => "boolean", "b" => "integer", "c" => "float", "d" => "string", "e" => "array", "f" => "object", "g" => "null"];
    print_r($arr);

    // Object
    $obj = (object) "This is an object";
    print_r($obj);

    // Null
    $null = null;
    var_dump($null);
?>