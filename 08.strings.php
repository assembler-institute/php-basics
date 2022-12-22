<?php
// Print a text string
echo "Hello, World!";

// Print a text string that interprets variables
$name = "John";
echo "Hello, $name!";

// Concatenate a previously declared variable in a text string
$name = "John";
echo "Hello, " . $name . "!";

// Execute the function that allows you to replace text in a string (case sensitive)
$text = "Hello, World!";
$newText = str_replace("World", "PHP", $text);
echo $newText; // Outputs "Hello, PHP!"

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$text = "Hello, World!";
$newText = str_ireplace("world", "PHP", $text);
echo $newText; // Outputs "Hello, PHP!"

// Execute the function that allows you to write a text N times
$text = "Hello, World! ";
echo str_repeat($text, 3); // Outputs "Hello, World! Hello, World! Hello, World! "

// Execute the function that allows to obtain the length of a text string
$text = "Hello, World!";
echo strlen($text); // Outputs 13

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$text = "Hello, World!";
echo strpos($text, "W"); // Outputs 6

// Execute the function that allows a text string to be capitalized
$text = "hello, world!";
echo ucwords($text); // Outputs "Hello, World!"

// Execute the function that allows you to transform a text string to lowercase
$text = "HELLO, WORLD!";
echo strtolower($text); // Outputs "hello, world!"

// Execute the function that allows to obtain a text substring from a given position
$text = "Hello, World!";
echo substr($text, 6);


?>