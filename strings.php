<?php
echo "<br/>";
print "Hello world!!";
echo "<br/>";

$a = "hello";
$b = "world";
$c = "!!!";
print "$a $b $c";

echo "<br/>";

$phrase  = "You should learn how to code.";

$language = array("Java", "JavaScript", "Python");

$system   = array("MacOS", "Windows", "Linux");

$newphrase = str_replace($language, $system, $phrase);

echo $newphrase;

echo "<br/>";

echo "<br/>";
$txt = 'Ricardo';
echo strlen($txt);

$newString = str_replace('should', 'avoid', $newphrase);

echo $newString;