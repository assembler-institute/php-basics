<?php
header("Content-type: text/plain");
// Print a text string
print("Hello I'm Ali\n");
// Print a text string that interpret variables
// Defining the variables
$text = "Hello, World!";
$num1 = 10;
$num2 = 20;
echo $text . "\n";
echo $num1 . "+" . $num2 . "=";
echo ($num1 + $num2) . "\n";

$text2 = print_r('Hello I\'m Ali', true);

// Concatenate a previously declared variable in a text string
echo $text2 . " and I'm from León" . "\n";

// Execute the function that allows you to replace text in a string (case sensitive)
$sentence = "Thanks god it's Monday";
$word = "Monday";
$replace = "Friday";
echo str_replace($word, $replace, $sentence) . "\n";

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$isentence = "Thanks god it's Monday, I hate monday";
$iword = "Monday";
$ireplace = "Friday";
echo str_replace($iword, $ireplace, $isentence) . "\n";

// Execute the function that allows you to write a text N times
echo str_repeat("❤️", 10) . "\n";

// Execute the function that allows to obtain the length of a text string
$name = "Supercalifragilistico";
echo $name, " has ", strlen($name), " characters.\n";

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$surname = "Cembranos Bruzón";
$pos = strpos($surname, "z");
echo "Z character is at position ", $pos, "\n";

// Execute the function that allows a text string to be capitalized
$entireName = "alica cembranos bruzón";
echo ucwords($entireName)."\n";

// Execute the function that allows you to transform a text string to lowercase
$phrase = "pHp IS VEry DIfFiculT tO UNDERSTAND";
echo strtolower($phrase)."\n";

// Execute the function that allows to obtain a text substring from a given position
$rest = substr("abcdefgh", 3, -2)."\n"; //return def
echo $rest;
