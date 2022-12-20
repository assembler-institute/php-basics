<?php

echo 'this is a simple string <br><br>';

$name = 'Iuliia';

echo "My name is $name";
echo "<br><br>";

// Concatenate a previously declared variable in a text string

$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
$a .= "World!";  
echo "$a";
echo "<br><br>";


//Execute the function that allows you to replace text in a string 

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

echo "$newphrase";
echo "<br><br>";


//Execute the function that allows you to write a text N times

echo str_repeat("Say Hi ", 5);
echo "<br><br>";

//Execute the function that allows to obtain the length of a text string
$howLong = 'Hola Iuliia';
echo strlen($howLong);
echo "<br><br>";

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string

echo strpos("I love php, I love php too!","love");
echo "<br><br>";

//Execute the function that allows a text string to be capitalized
$hola = "Mary Had A Little Lamb and She LOVED It So";
$hola = strtoupper($hola);
echo $hola; 
echo "<br><br>";

// Execute the function that allows you to transform a text string to lowercase

$adios = "Mary Had A Little Lamb and She LOVED It So";
$adios = strtolower($adios);
echo $adios;
echo "<br><br>";

// Execute the function that allows to obtain a text substring from a given position
$rest = substr("abcdef", -1);    // returns "f"
$rest = substr("abcdef", 2);
echo "$rest";

echo "<br><br>";

?>