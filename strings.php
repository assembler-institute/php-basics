<?php
echo "<br/>";
print "Hello world!!";
echo "<br/>";

$a = "hola";
$b = "que tal?";
$c = "bien y tu?";
print "$a $b $c";

echo "<br/>";

$phrase  = "You should eat fruits, vegetables, and fiber every day.";

$healthy = array("fruits", "vegetables", "fiber");

$yummy   = array("pizza", "beer", "ice cream");



$newphrase = str_replace($healthy, $yummy, $phrase);

echo $newphrase;

echo "<br/>";



$newString = str_replace('should', 'avoid', $newphrase);

echo $newString;

echo "<br/>";
echo str_repeat("repeat", 10);

echo "<br/>";
$txt = 'Alejandro';
echo strlen($txt);

echo "<br/>";
$mystring = 'alejandro es lo mejor del mundo';
$findme   = 'mejor';
$pos = strpos($mystring, $findme);
echo $pos;

echo "<br/>";
$textExample = "hola como estas?";
echo ucfirst($textExample);

echo "<br/>";
$str = "Mary Had A Little Lamb and She LOVED It So";
echo strtolower($str);

echo "<br/>";
$rest = substr("abcdef", -2);
echo $rest;