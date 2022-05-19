<?php

// Strings in PHP


// Print text string
print 'This is a texft string.';

echo '<br><br>';

// Print text string that interprets variables.
$a = 'cats';
$b = 'dogs';
print "It's raining $a and $b.";

// Use function to concatenate strings
echo '<br><br>';
$c = $a . ' and ' . $b;
$str = "I don't prefer one over the other. I like both " . $c . '.';
print $str;

echo '<br><br>';

// Use function to replace text, here params are 'search for', 'replace with', 'in this string'. CASE-SENSITIVE
$strTwo  = str_replace('like', "don't like", $str); 
echo $strTwo; // I don't prefer one over the other. I don't like both cats and dogs.
echo '<br>';
echo str_replace("I don't like both cats and dogs.", '', $strTwo);

echo '<br><br>';

// Replace part of a string, as above, but NOT CASE-SENSITIVE
echo str_ireplace("DOn't LIKE", 'like', $strTwo);

echo '<br><br>';

// Repeat a string a number of times.
$dorothysLine = "There's no place like home.";
echo str_repeat($dorothysLine, 3);

echo '<br><br>';

// Find string length
echo strlen($dorothysLine);

echo '<br><br>';

// Find position of first occurrence of string within string, CASE-SENSITIVE
$linePlace = strpos($dorothysLine, 'place');
echo $linePlace;
echo '<br>';
// and CASE-INSENSITIVE
$linePlace = stripos($dorothysLine, 'NO');
echo $linePlace;

echo '<br><br>';

// Capitalize text string
echo strtoupper($dorothysLine);

echo '<br><br>';

// Change string to lower case
echo strtolower('CAPITAL = LOUD!');

echo '<br><br>';

// Get a substring from a given position
echo substr($dorothysLine, 22, 4);   // home

