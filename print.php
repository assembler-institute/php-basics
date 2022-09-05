<?php

//Instruction that makes use of "echo"

echo "This is a test with echo.", "\n", "<br>"; // "\n" means line feed (avance de línea)

echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n", "<br>";

echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n" . "<br>"; // . is used to concatenate

echo "Hello ", isset($name) ? $name : "Pau Tomás", "!" , "<br>";

$example = "The argument can be any expression";
echo "$example which produces a string", "<br>";

$sports = ["tenis", "padel", "football", "basketball"];
echo "My favourite sports are " . implode(", ", $sports) . "..." . "<br>"; // implode — Join array elements with a string

echo 3 * 12;
echo "<hr>";

//Instruction that makes ude of "print"

print "This is a test with print. <br>"; 

$example = "The argument can be any expression";
print "$example which produces a string <br>";

$sports = ["tenis", "padel", "football", "basketball"];
print implode(", ", $sports);

print "<br>";
print 6 * 7;
print "<hr>";


//Instruction that makes use of "print_r" — Prints human-readable information about a variable

echo "<pre>";
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

print_r ($a);
echo "</pre>";

?>