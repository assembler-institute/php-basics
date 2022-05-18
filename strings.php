<?php

//Print a text string
print "Hello Assembler Team! "."<br>";

//Print a text string that interpret variables
print "Hello Assembler Team! " . "How are you? " . "Let's code! <br>";

//Concatenate a previously declared variable in a text string
$text1 = "Hello Assembler Team! ";
$text2 = "How are you? ";
$text3 = "Let's code! <br>";
print $text1 . $text2 . $text3;


//Execute the function that allows you to replace text in a string (case sensitive)
$text = "Hello Assembler TEAM! ";
$text = str_replace("e", "", $text);
$text = str_replace("Team!", "", $text);
print $text . "<br>";


//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$text = "Hello Assembler Team! ";
$text = str_ireplace("e", "", $text);
$text = str_ireplace("Team!", "", $text);
print $text. "<br>";


//Execute the function that allows you to write a text N times
$text = "Hello Assembler Team! ";
$text = str_repeat($text, 3);
print $text . "<br>";

//Execute the function that allows to obtain the length of a text string
$text = "Hello Assembler Team! ";
$text = strlen($text);
print $text . "<br>";

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$text = "Hello Assembler Team! ";
$text = strpos($text, "Assembler");
print $text . "<br>";

//Execute the function that allows a text string to be capitalized
$text = "Hello Assembler Team! ";
$text = strtoupper($text);
print $text . "<br>";


//Execute the function that allows you to transform a text string to lowercase
$text = "HELLO ASSEMBLER TEAM! ";
$text = strtolower($text);
print $text . "<br>";


//Execute the function that allows to obtain a text substring from a given position
$text = "Hello Assembler Team! ";
$text = substr($text, 0, 5);
print $text . "<br>";

