<?php
    echo "Hello\n";

    $world = "World!\n";
    echo "$world";

    echo "Hello $world\n";

    $cat = "Cat\n";
    echo str_ireplace("c", "b", $cat);

    echo str_replace("C", "b", $cat);

    $hello = "Hello";
    echo str_repeat($hello . "\n", 5);

    $length = "length\n";
    echo strlen($length);

    $str = "hello\n";
    echo strpos($str, "o");

    echo ucfirst($str);

    $strToLow = "Hello\n";
    echo strtolower($strToLow);

    $text = "Hello, how are you?";
    $find = substr($text, 7, 3);
    echo $find;
?>