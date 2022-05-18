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
$text = "Hello Assembler Team! ";
$text = str_replace("Assembler", "World!", $text);
$text = str_replace("Team!", "", $text);
print $text;

//
