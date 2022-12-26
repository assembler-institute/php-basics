<?php
$var1 =2;
$var2 = 3;
$var3 = 5;
$bool1 = true;
$bool2 = true;
$bool3 = false;

$var4 = $var1 + $var2;
echo "2 + 3 = ";
print_r($var4);

echo "<br>";

$var4 = $var1 - $var2;
echo "2 - 3 = ";
print_r($var4);

echo "<br>";

$var4 = $var1 * $var2;
echo "2 * 3 = ";
print_r($var4);

echo "<br>";

$var4 = $var1 / $var2;
echo "2 / 3 = ";
print_r($var4);

echo "<br>";

echo "1 = 2? ";
var_dump(1 == 2);

echo "<br>";
echo "1 != 2?";
var_dump(1 != 2);

echo "<br>";
echo "1 < 2? ";
var_dump(1 < 2);

echo "<br>";
echo "1 > 2? ";
var_dump(1 > 2);

echo "<br>";
echo "1 <= 2? ";
var_dump(1 <= 2);

echo "<br>";
echo "1 >= 2? ";
var_dump(1 >= 2);
echo "<br>";

echo "true && true: ";
var_dump($bool1 && $bool2);
echo "<br>";

echo "true || false:  ";
var_dump($bool1 || $bool3);
echo "<br>";

echo "!false: ";
var_dump(!$bool3);
echo "<br>";

echo "true XOR false: ";
var_dump($bool1 xor $bool3);
echo "<br>";


?>