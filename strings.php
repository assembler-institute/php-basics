<?php

print "Hello World";

$world = "world";

print "Hello $world";

print 'Hello'.$world;

// Replace a word of a string
print str_replace("nothing", $world, "Hello nothing");

// Replace a word of a string (no sensitive)
print str_ireplace("NothinG", $world, "Hello nothing");

// Repeat N times a string
print str_repeat("Hello World", 2);

// Show the length of a string
print strlen("Hello world");

// Show the initial position of a string
print strpos("Hello World", "World");

// Capitalize
print ucfirst("hello world");

// Convert all the text to upper case
print strtoupper("hello world");

// convert all the text to lower case
print strtolower("HELLO WORLD");

// Print a substring of a string
print substr("Hello World", 7);