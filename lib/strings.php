<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Print a text string
echo 'Hello World!';
echo '<br><br>';

// Print a text string that interpret variables
$name = 'Brahim';
echo "My name is $name";
echo '<br><br>';

// Concatenate a previously declared variable in a text string
$name = 'Brahim Benalia';
echo 'My name is ' . $name;
echo '<br><br>';

// Execute the function that allows you to replace text in a string 
echo str_replace("world", "Dolly", "Hello world!");
echo '<br><br>';

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
echo str_ireplace("world", "Dolly", "Hello WorLD!");
echo '<br><br>';

// Execute the function that allows you to write a text N times
echo str_repeat("+=", 10);
echo '<br><br>';

// Execute the function that allows to obtain the length of a text string
echo strlen("Hello world!");
echo '<br><br>';

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo strpos("Hello world!", "world");
echo '<br><br>';

// Execute the function that allows a text string to be capitalized
$str = 'HELLO world!';
echo  ucwords(strtolower($str));
echo '<br><br>';

// Execute the function that allows you to transform a text string to lowercase
$str = 'HELLO WORLD!';
echo  strtolower($str);
echo '<br><br>';

// Execute the function that allows to obtain a text substring from the position
$rest = substr("abcdef", 0, -1);
echo $rest;
echo '<br><br>';

require_once('../foot.php');
