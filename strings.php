<?php
//Print a text string
print "Happy Halloween";

//Print a text string that interpret variables
$myName = " Dani";
$other = "hola k ase";
echo $myName;

//Concatenate a previously declared variable in a text string
echo $myName." Alamo daniella del valle";

//Execute the function that allows you to replace text in a string (case sensitive)
$replace = str_replace("hola", $myName, $other);
echo $replace;

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$replaceNoSensitive = str_ireplace("Hola", $myName, $other);
echo $replaceNoSensitive; 


//Execute the function that allows you to write a text N times
echo str_repeat(" xD ", 10);

//Execute the function that allows to obtain the length of a text string
$str = 'Halloween';
echo strlen($str); // 9

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo strpos("I love php, I love php too!","php");

//Execute the function that allows a text string to be capitalized
$upper = $myName." in upper";
echo strtoupper($upper);

//Execute the function that allows you to transform a text string to lowercase
$lower = " My name is Dani, ";
$lower = strtolower($lower);
echo $lower;

//Execute the function that allows to obtain a text substring from the position
echo substr('daniella', 3, -1);

?>