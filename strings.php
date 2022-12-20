<?php 
# Text string
echo ("<i>Text string: </i><br>");
echo("(Example text string)");

echo ("<hr>");

# Text string that interpret variables
echo ("<i>Text string that interpret variables: </i> <br>");

$textExample = ("Text string in variable");
echo ("$textExample");

echo ("<hr>");

# Concatenate a previously declared variable in a text string

echo ("<i>Concatenate a previously declared variable in a text string: (. or .=)</i> <br>");
echo("(Example text string) ". $textExample);

echo ("<hr>");

# Replace text in a string "case sensitive"

echo ("<i>Replace text in a string `case sensitive` (str_replace()):</i> <br>");
$phrase = "I like MUsic, EAt and SpOrts.";
$hobbies = array("MUsic", "EAt", "SpOrts");
$hobbies2 = array("Cinema", "Gaming", "Travel");
echo ("Original text: $phrase <br>");

$newPhrase = str_replace($hobbies, $hobbies2, $phrase);
echo ("Replaced text: $newPhrase");

echo ("<hr>");

# Replace text in a string "case insensitive"

echo ("<i>Replace text in a string `case insensitive` (str_ireplace()):</i> <br>");
$phrase = "I like MUsic, eAt and SpOrts.";
$hobbies = array("mUsic", "Eat", "spOrts");
$hobbies2 = array("Cinema", "Gaming", "Travel");
echo ("Original text: $phrase <br>");

$newPhrase = str_ireplace($hobbies, $hobbies2, $phrase);
echo ("Replaced text: $newPhrase");

echo ("<hr>");

# Write a text N times

echo ("<i>Write a text N times (str_repeat()): </i> <br>");
$text = str_repeat("Hello Assembler <br>", 10);
echo ("$text");

echo ("<hr>");

# Length of a text string

echo("<i> length of a text string `Keep pushing!` (strlen()): </i> <br>");
$text = strlen("Keep pushing!");
echo ("letters: $text");

echo ("<hr>");

# First occurrence of a text within a text string

echo("<i> First occurrence of a text within a text string `Hello world` (strpos(): </i> <br>");
$text = "Hello World";
$findLetter = "l";
$textChange = strpos($text, $findLetter);
echo ("index: $textChange");

echo ("<hr>");

# Allows a text string to be capitalized

echo("<i> Allows a text string to be capitalized `InCompreHeNsibilIties` (strtoupper() and strtolower(): </i> <br>");

$text = "InCompreHeNsibilIties";

echo("Uperrcase: ".strtoupper($text));
echo ("<br>");
echo ("Lowercase: " .strtolower($text));

echo ("<hr>");

# obtain a text substring from a given position

echo("<i> Obtain a text substring from a given position `Tutankhamun` (substr(): </i> <br>");

$text = "Tutankhamun";
$textPosition = substr($text, 6);
echo("position: $textPosition")

?>