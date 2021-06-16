<?php
// Print text string
echo "<h4>Print text string</h4>";

print "Hello World!";

// Print text string with variables
echo "<h4>Print text string with variables</h4>";

$word = "World";

print "Hello $word!";


// Concatenate variables
echo "<h4>Concatenate variables in string</h4>";

$word1 = "Hello";
$word2 = "World";

print "$word1 $word2!";

// Case sensitive replacement
echo "<h4>Case sensitive replacement</h4>";

$testString = "A quick fast John jumps over the lazy dog";
echo str_replace("john", "jaguar", $testString);;

// Case insensitive replacement
echo "<h4>Case insensitive replacement</h4>";

$testString = "A quick fast John jumps over the lazy dog";
echo str_ireplace("john", "jaguar", $testString);

// Write text N times
echo "<h4>Write text N times</h4>";

$testString = "A quick fast John jumps over the lazy dog";
$nTimes = 10;
echo str_repeat("$testString <br>", 10);

// Get string length
echo "<h4>Get string length</h4>";

echo strlen($testString);

// Get position of first occurrence
echo "<h4>Position of first occurrence</h4>";

$repetitiveString = "Tell me if I'm repetitive. Am I repetitive, right? Maybe I'm a bit to much repetitive";
echo stripos($repetitiveString, "repetitive");

// Capitalized string
echo "<h4>Capitalized string</h4>";

$testString = "A quick fast John jumps over the lazy dog";
echo strtoupper($testString);

// Lowercase string
echo "<h4>Lowercase string</h4>";

$testString = "A quick fast John jumps over the lazy dog";
echo strtolower($testString);

// Substring
echo "<h4>Substring</h4>";

$testString = "A quick fast John jumps over the lazy dog";
echo substr($testString, -10);
?>
