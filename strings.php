<?php

print('hello <br>'); // printing a text string

$user = 'Sefi';
$greeting = 'Hello ';

print($user); // printing interpret variable
print('<br>');

print($greeting .$user); // concatenation of two strings
print('<br>');

$fact = 'I always tell the truth';

echo str_replace("the truth", "lies", $fact); // replacing text in string - case sensitive
print('<br>');


echo str_ireplace("THE TRUTH", "Lies", $fact); // replacing text in string -  not case sensitive
print('<br>');

echo str_repeat($fact ." ", 10); // repeating string N times
print('<br>');

echo strlen($fact); // returns string length
print('<br>');

echo strpos($fact, 'truth'); // find the first occurnce of the string indicated in the second argument
print('<br>');

echo strtoupper($fact); // capitlizing the srting given in the argument
print('<br>');

echo strtolower($fact); // lower case the srtring given in the argument
print('<br>');

echo substr($fact, 9); // substracting a string form a given position