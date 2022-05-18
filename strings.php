<?php
// str_replace("Friday", "Saturday", $mySentence)
// str_ireplace("Friday", "Sunday", $mySentence)
// str_repeat("Gol! ", 12)
// strlen($myName)
// strpos($myFullName, "cuevas") => position of a word
// strtoupper($myFullName)
// strtolower($myHometown)
// substr($myFullName, 5) => string from a given position 
// 

echo ("<h1>Strings on PHP</h1>");

echo("Writting text on PHP");

$myStr = "sunny day";
echo("<p>$myStr</p>"); 

echo("<p>This is a " .$myStr. "</p>");
echo("<hr>");


echo("<h2>Replace text in a string
(case sensitive)</h2>");

$mySentence = "I´ll go to the cine this Friday";
echo str_replace("Friday", "Saturday", $mySentence);

echo("<hr>");

echo("<h2>Replace text in a string
(NO case sensitive)</h2>");

$mySentence = "I´ll go to the cine this Friday";
echo str_ireplace("Friday", "Sunday", $mySentence);
echo("<hr>");

echo("<h2>Write a text N times</h2>");
echo str_repeat("Gol! ", 12);
echo("<hr>");

echo("<h2>Length of a text string</h2>");
$myName = "jose";
echo("My name is $myName and it has " .strlen($myName). " letters</p>");
echo("<hr>");

echo("<h2>The position of the first occurrence of a text within a text string</h2>");
$myFullName = "jose cuevas";
echo ("<p>The position of 'cuevas' in 'jose cuevas' string is " .strpos($myFullName, "cuevas"). "</p>");
echo("<hr>");

echo("<h2>Text string to upper case</h2>");
echo strtoupper($myFullName);
echo("<hr>");

echo("<h2>Text string to lower case</h2>");
$myHometown = "Oviedo";
echo strtolower($myHometown);
echo("<hr>");

echo("<h2>Obtain a text substring from
a given position</h2>");
echo substr($myFullName, 5);
echo("<hr>");

?>