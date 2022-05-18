<?php
//print a text string
print("Hello, World").nl2br("\n");
echo nl2br("\n");

//print a text string that interpret variables
$age = 31;
print_r("Hello, I have $age years");
echo nl2br("\n");
echo nl2br("\n");

//Concatenate a previously declared vairable in a text string(case sensitive)
$str = "Since ".$age." years, man walked over the moon";
print_r($str);
echo nl2br("\n");
echo nl2br("\n");

//Execute the function that allows you to replace text in a string(case Sensitive)
$vocals = array("a","e",",i","o","u");
$str1 = "Since ".$age." years, man walked over the mOOn";
print_r(str_replace($vocals,"",$str1));
echo nl2br("\n");
echo nl2br("\n");

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
print_r(str_ireplace($vocals,"",$str1));
echo nl2br("\n");
echo nl2br("\n");

//Execute the function that allows you to write a text N times
print_r(str_repeat($str.nl2br("\n"), 5));
echo nl2br("\n");

//Execute the function that allows to obtain the length of a text string
print_r(strlen($str).nl2br("\n"));
echo nl2br("\n");

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
print_r(strpos($str,"man").nl2br("\n"));
echo nl2br("\n");

//Execute the function that allows a text string to be capitalized
print_r(strtoupper($str).nl2br("\n"));
echo nl2br("\n");

//Execute the function that allows you to transform a text string to lowercase
$strUPPER = "THIS TEXT IS IN UPPERCASE";
print_r(strtolower($strUPPER).nl2br("\n"));
echo nl2br("\n");

//Execute the function that allows to obtain a text substring from a given position
print_r(substr($str, 15, strlen($str)).nl2br("\n"));
echo nl2br("\n");

?>