<?php
//This file as its name indicates will be used to work with text strings:
// Print a text string
print('Prueba');
// Print a text string that interpret variables
$currentDate = new DateTime();
$month = $currentDate->format('F');
print("<br>We are in $month. </br>");
// Concatenate a previously declared variable in a text string
$monthNumber = $currentDate->format('m');
$concatMonth = "Month $monthNumber is $month.";
print("<br>$concatMonth</br>");
// Execute the function that allows you to replace text in a string (case sensitive)
$phrase = 'Current month is June';
print("<br>Original: $phrase</br>");
$phrase2 = str_replace('month', 'MONTH', $phrase);
print("<br>Replaced: $phrase2</br>");
// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$phrase = 'Current month is June';
print("<br>Original: $phrase</br>");
$phrase2 = str_ireplace('Month', 'MONTH', $phrase);
print("<br>Replaced: $phrase2</br>");
// Execute the function that allows you to write a text N times
$str = str_repeat('Assembler', 6);
print_r("<br>$str</br>");
// Execute the function that allows to obtain the length of a text string
$strLength = strlen('Assembler');
print_r("<br>$strLength</br>");
// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$strPos = strpos('Assembler', 'r');
print_r("<br>$strPos</br>");
// Execute the function that allows a text string to be capitalized
$strToUpperCase = strtoupper('Assembler');
print_r("<br>$strToUpperCase</br>");
// Execute the function that allows you to transform a text string to lowercase
$strToLowerCase = strtolower('AssEmBler');
print_r("<br>$strToLowerCase</br>");
// Execute the function that allows to obtain a text substring from the position
$substr = substr('Assembler', 0, 3);
print_r("<br>$substr</br>");
