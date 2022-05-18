<?php

// Print a text string
echo "text string"."<br>";
// Print a text string that interpret variables
$v1 = "world";
echo "Hello $v1"."<br>";
// Concatenate a previously declared variable in a text string
$v2 = "Hello";
echo $v2." Kitty"."<br>";
// Execute the function that allows you to replace text in a string (case sensitive)
$text = "Hello Kitty";
$v3 = str_replace("Kitty","World", $text)."<br>";
echo $v3;

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$text = "Hello KiTtY";
$v4 = str_ireplace("kitty","World", $text)."<br>";
echo $v4;

// Execute the function that allows you to write a text N times
$text = "PhP world ";
$v5 = str_repeat($text, 4);
echo $v5."<br>";

// Execute the function that allows to obtain the length of a text string
$v6 = strlen($text);
echo $v6."<br>";

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$v7 = str_contains($text, "php");
echo $v7."<br>";

// Execute the function that allows a text string to be capitalized
$v8 = strtoupper($text);
echo $v8."<br>";

// Execute the function that allows you to transform a text string to lowercase
$v9 = strtolower($text);
echo $v9."<br>";

// Execute the function that allows to obtain a text substring from a given position
$v10 = substr($text, 0, 3);
echo $v10;
