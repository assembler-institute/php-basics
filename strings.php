<?php
echo "<h3>Print a text string</h3>";

print "example text";
echo "<br>";

echo "<h3>Print a text string that interpret variables</h3>";

$city = "Madrid";

print $city;
echo "<br>";

echo "<h3>Concatenate a previously declared variable in a text string</h3>";

print $city. " (Spain)";
echo "<br>";

echo "<h3>Execute the function that allows you to replace text in a string (case sensitive)</h3>";

echo "Hello world";
echo "<br>";
echo str_replace("Hello", "bye", "Hello world");
echo "<br>";

echo "<h3>Execute the function that allows you to replace text in a string (without taking into account upper / lower case)</h3>";

echo "Hello world";
echo "<br>";
echo str_ireplace("hello", "bye", "hello world");
echo "<br>";

echo "<h3>Execute the function that allows you to write a text N times</h3>";

echo str_repeat('Hello <br>', 7);
echo "<br>";

echo "<h3>Execute the function that allows to obtain the length of a text string</h3>";

$phrase = "Good morning everyone, have a good day";
echo strlen($phrase);
echo "<br>";

echo "<h3>Executes the function that allows to obtain the position of the first occurrence of a text within a text string</h3>";

echo strpos($phrase, "morning");
echo "<br>";

echo "<h3>Execute the function that allows a text string to be capitalized</h3>";

echo strtoupper($phrase);
echo "<br>";

echo "<h3>Execute the function that allows you to transform a text string to lowercase</h3>";

echo strtolower($phrase);
echo "<br>";

echo "<h3>Execute the function that allows to obtain a text substring from a given position</h3>";

echo substr($phrase, 0, 12);

?>