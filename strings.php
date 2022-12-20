<?php
//Print a text string"
print "Merry christmas everyone <br>";

//Print a text string that interpret variables
$hi= "Hello";
$bye= "Good bye";
echo $hi."<br>";

//Concatenate a previously declared variable in a text string
echo $hi ."Mi nombre es Sofia <br>";

//Execute the function that allows you to replace text in a string 
$replace = str_replace("Php", $hi, $bye);
echo $replace;

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$replaceNoSensitive = str_ireplace("php", $hi, $bye);
echo $replaceNoSensitive."<br>";

//Execute the function that allows you to write a text N times
echo str_repeat(" Argentina Campeón Mundial ", 10)."<br>";

//Execute the function that allows to obtain the length of a text string
$str = 'Happy New Year';
echo strlen($str)."<br>";


//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo strpos("I love Messi so much","Messi")."<br>";

//Execute the function that allows a text string to be capitalized
$upper = $bye." in upper";
echo strtoupper($upper)."<br>";

//Execute the function that allows you to transform a text string to lowercase
$lower = " My name is Sofi ";
$lower = strtolower($lower);
echo $lower."<br>";

//Execute the function that allows to obtain a text substring from the position
echo substr('sofia', 3, -1);

?>