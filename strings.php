<?php

#Print a text string

print "This is a text string";

echo "<br>";

#Print a text string that interpret variables

$string = "This is a variable";

print($string);

echo "<br>";

#Concatenate a previously declared variable in a text string

print($string. "/ Print a text string");

echo "<br>";

#Execute the function that allows you to replace text in a string 

$fruit = "My favourite fruit is Apple";

print_r(str_replace("Apple", "Strawberry", $fruit));

echo "<br>";

#Execute the function that allows you to replace text in a string

$fruit = "My favorite fruit is Appple";

print_r(str_ireplace("aPPle", "Strawberry", $fruit));

echo "<br>";

#Execute the function that allows you to write a text N times

$repeat = "123";

echo str_repeat($repeat, 10);

echo "<br>";

#Execute the function that allows to obtain the length of a text string

$length = "Hi, I am Yno";

echo strlen($length);

echo "<br>";

#Executes the function that allows to obtain the position of the first occurrence of a text within a text string

echo strpos("I like summer", "summer");

echo "<br>";

#Execute the function that allows a text string to be capitalized

echo strtoupper("this is stroupper");

echo "<br>";

#Execute the function that allows you to transform a text string to lowercase

echo strtolower("this is strtolower");

echo "<br>";

#Execute the function that allows to obtain a text substring from a given position

echo substr("this is a substr",6);

?>