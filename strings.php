<?php
/*
Print a text string
Print a text string that interpret variables
Concatenate a previously declared variable in a text string
Execute the function that allows you to replace text in a string (case sensitive)
Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
Execute the function that allows you to write a text N times
Execute the function that allows to obtain the length of a text string
Executes the function that allows to obtain the position of the first occurrence of a text within a text string
Execute the function that allows a text string to be capitalized
Execute the function that allows you to transform a text string to lowercase
Execute the function that allows to obtain a text substring from the position
*/

$style = "style='font-family: helvetica;'";
$line = "style='border: 1px solid rgb(230,230,230);'";

print("<h2 $style> - - Strings </h2>");

//Print a text string
print("<h3 $style>Snippet [ String ] </h3>");

print('<pre style="font-size: 15px">
echo "Hello!";
</pre>');

print("<h5 $style>Output</h5>");

echo "Hello!";

print("<hr $line />");

//Print a text string that interpret variables
print("<h3 $style>Snippet [ String Interpret ] </h3>");

print('<pre style="font-size: 15px">
$name = "Laura";
echo "Hello! $name";
</pre>');

print("<h5 $style>Output</h5>");

$name = "Laura";
echo "<p $style>Hello! $name";

print("<hr $line />");

//Concatenate a previously declared variable in a text string
print("<h3 $style>Snippet [ Concatente string ] </h3>");

print('<pre style="font-size: 15px">
$name = "ura";
echo "La" . "$name";
</pre>');

print("<h5 $style>Output</h5>");

$name = "ura";
echo "<p $style>La" . "$name";

print("<hr $line />");

//Execute the function that allows you to replace text in a string (case sensitive)
print("<h3 $style>Snippet [ replace string case-sensitive ] </h3>");

print('<pre style="font-size: 15px">
$string = "If the facts do not fit the theory, change the facts.";
echo str_replace("facts", "truth", $string);
</pre>');

print("<h5 $style>Output</h5>");

$string = "<p $style>If the facts do not fit the theory, change the facts.";
echo str_replace("facts", "truth", $string);

print("<hr $line />");

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
print("<h3 $style>Snippet [ replace string non case-sensitive ] </h3>");

print('<pre style="font-size: 15px">
$string = "If the facts do not fit the theory, change the facts.";
echo str_ireplace("FACTS", "truth", $string);
</pre>');

print("<h5 $style>Output</h5>");

$string = "<p $style>If the facts do not fit the theory, change the facts.";
echo str_ireplace("FACTS", "truth", $string);

print("<hr $line />");

//Execute the function that allows you to write a text N times
print("<h3 $style>Snippet [ write a text N times ] </h3>");

print('<pre style="font-size: 15px">
echo str_repeat("👏", 10);
</pre>');

print("<h5 $style>Output</h5>");

echo str_repeat("👏", 10);

print("<hr $line />");

//Execute the function that allows to obtain the length of a text string
print("<h3 $style>Snippet [ length of string ] </h3>");

print('<pre style="font-size: 15px">
$string = "Hello!";
echo strlen($string);
</pre>');

print("<h5 $style>Output</h5>");

$string = "Hello!";
echo strlen($string);

print("<hr $line />");

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
print("<h3 $style>Snippet [ String occurrence ] </h3>");

print('<pre style="font-size: 15px">
$string = "absolute";
$pos = strpos($string, "s");
echo "$pos";
</pre>');

print("<h5 $style>Output</h5>");

$string = "absolute";
$pos = strpos($string, "abs");
echo "<p $style>$pos";

print("<hr $line />");

//Execute the function that allows a text string to be capitalized
print("<h3 $style>Snippet [ String capitalized ] </h3>");

print('<pre style="font-size: 15px">
echo ucfirst("hello world!");
</pre>');

print("<h5 $style>Output</h5>");

echo ucfirst("hello world!");

print("<hr $line />");

//Execute the function that allows you to transform a text string to lowercase
print("<h3 $style>Snippet [ String lowercase ] </h3>");

print('<pre style="font-size: 15px">
echo strtolower("HELLO WORLD!");
</pre>');

print("<h5 $style>Output</h5>");

echo strtolower("HELLO WORLD!");

print("<hr $line />");

//Execute the function that allows to obtain a text substring from the position
print("<h3 $style>Snippet [ obtain a text substring from the position ] </h3>");

print('<pre style="font-size: 15px">
echo substr("abcdef", 1, -4);
</pre>');

print("<h5 $style>Output</h5>");

echo substr("abcdef", 1, -4);

print("<hr $line />");
