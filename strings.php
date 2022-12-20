<?php

/* PUNTO 1 */

print "Hello World";
echo "<br><br>";

/* PUNTO 2 */

$a = "Hello World";
print "$a";
echo "<br><br>";

/* PUNTO 3 */

print "Id like to say $a";
echo "<br><br>";

/* PUNTO 4  */

echo str_replace("World","Javier", $a);
echo "<br><br>";

/* PUNTO 5 */

$b = "HELLO WORLD";

echo str_ireplace("world","Javier", $b);
echo "<br><br>";

/* PUNTO 6 */

echo str_repeat($a, 5);
echo "<br><br>";

/* PUNTO 7 */

echo strlen($a);
echo "<br><br>";

/* PUNTO 8  */

$x = 'abcdef abcdef';
$pos = strpos($x, 'a', 1);
echo $pos;
echo "<br><br>";

/* PUNTO 9 */

$c = "hello world";
$c = ucfirst($c);
echo $c;
echo "<br><br>";

/* PUNTO 10 */

$d = "HELLO WORLD";
$d = ucfirst($d);
$d = ucfirst(strtolower($d));
echo $d;
echo "<br><br>";

/* PUNTO 11 */

$e = substr("Javier", -1);
echo "$e<br><br>";
$f = substr("Javier", -2);
echo "$f<br><br>";
$g = substr("Javier", -3, 1);
echo "$g";


?>