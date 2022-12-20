<?php
echo ("<h1>Operators</h1>");

# variables

$a = 3.3;
$b = 4.3;

# aritmetic operators

echo ("aritmetics operators: <br>");
$sum = $a + $b;
var_dump($sum);
echo ("<br>");

$rest = $a - $b;
var_dump($rest);
echo ("<br>");

$multi = $a * $b;
var_dump($multi);
echo ("<br>");

$div = $a / $b;
var_dump($div);
echo ("<br>");

$remainder = $a % $b;
var_dump($remainder);
echo ("<hr>");


# comparison operators
echo ("comparison operators: <br>");
var_dump($a == $b);
echo ("<br>");

var_dump($a != $b);
echo ("<br>");

var_dump($a < $b);
echo ("<br>");

var_dump($a > $b);
echo ("<br>");

var_dump($a <= $b);
echo ("<br>");

var_dump($a >= $b);
echo ("<hr>");

# logical operators
echo ("logical operators: <br>");
if($a == 4 && $b == 4.3) {
    var_dump("true");
}else {
    var_dump("false");
}
echo ("<br>");


if($a == 4 || $b == 4.3) {
    var_dump("true");
}else {
    var_dump("false");
}
echo ("<br>");

if(!$a) {
    var_dump("true");
}else {
    var_dump("false");
}
echo ("<br>");

?>