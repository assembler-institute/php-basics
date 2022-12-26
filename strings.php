<?php

echo "this is a printed string";
echo "<br>";

$a = "this is a string printed with a variable";
print_r ($a);
echo "<br>";

echo "{$a} and concatenated with text";
echo "<br>";

$strin = "I like Lasagna";
print_r(str_replace("Lasagna", "Pasta", $string));
echo "<br>";

$string = "I like Lasagna";
print_r(str_ireplace("lasagNA", "pasta", $string));
echo "<br>";

$repeatString = "hello <br>";
echo str_repeat($repeatString, 10);

$stringLength = "This is a string";
echo strlen($stringLength);
echo "<br>";

echo strpos("This is a string", "string");
echo "<br>";

$anotherString = "this is yet another string";
echo strtoupper($anotherString);
echo "<br>";

echo strtolower($anotherString);
echo "<br>";

echo substr($anotherString, 11);
?>