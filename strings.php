<html>

<?php

$str = "Juan";
$str2 = "Pedro";

print "this is a string";
print "My name is $str";

echo "</br>";

print($str . $str2);

echo "</br>";

print str_replace("J", "j", $str);

echo "</br>";

print str_ireplace("U", "o", $str);

echo "</br>";

print str_repeat("jamon", 10);

echo "</br>";

print strlen($str2);

echo "</br>";

print strpos($str, "n");

echo "</br>";

print strtoupper($str);

echo "</br>";

print strtolower($str2);

echo "</br>";

print substr($str, 0, 2);
?>

</html>