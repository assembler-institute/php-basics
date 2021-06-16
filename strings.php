<?php
// Print text string
echo "<p>Print text string<p>";

print "Hello World!";

// Print text string with variables
echo "<p>Print text string with variables<p>";

$word = "World";

print "Hello $word!";


// Concatenate variables
echo "<p>Concatenate variables in string<p>";

$word1 = "Hello";
$word2 = "World";

print "$word1 $word2!";

// Case sensitive replacement
echo "<p>Case sensitive replacement<p>";

$testString = "A quick brown John jumps over the lazy dog.";
echo str_replace("john", "jaguar", $testString);;

// Case insensitive replacement
echo "<p>Case insensitive replacement<p>";

$testString = "A quick brown John jumps over the lazy dog.";
echo str_ireplace("john", "jaguar", $testString);

// Write text N times
echo "<p>Write text N times<p>";

$testString = "A quick brown John jumps over the lazy dog.";
$nTimes = 10;
echo str_repeat("$testString <br>", 10);

// Get string length
echo "<p>Get string length<p>";

echo strlen($testString);

// Get position of first occurrence
echo "<p>Position of first occurrence<p>";

$repetitiveString = "Tell me if I'm repetitive. Am I repetitive, right? Maybe I'm a bit to much repetitive";
echo stripos($repetitiveString, "repetitive");

// Capitalized string
echo "<p>Capitalized string<p>";

$testString = "A quick brown John jumps over the lazy dog.";
echo strtoupper($testString);

// Lowercase string
echo "<p>Lowercase string<p>";

$testString = "A quick brown John jumps over the lazy dog.";
echo strtolower($testString);

// Substring
echo "<p>Substring<p>";

$testString = "A quick brown John jumps over the lazy dog.";
echo substr($testString, -10);
?>
