<?php
//Arithmetic operators
$a=10;
$b=2;
echo nl2br("Arithmetic operators:\n");
print_r(nl2br(var_dump($a,$b)."Suma de ".$a." y ".$b.": ".$a+$b."\n"));
print_r(nl2br(var_dump($a,$b)."Resta de ".$a." y ".$b.": ".$a-$b."\n"));
print_r(nl2br(var_dump($a,$b)."Producto de ".$a." y ".$b.": ".$a*$b."\n"));
print_r(nl2br(var_dump($a,$b)."Division de ".$a." y ".$b.": ".$a/$b."\n"));
print_r(nl2br(var_dump($a,$b)."Resto de ".$a." y ".$b.": ".$a%$b."\n\n"));

//Comparison operators
$c = false;
$d = true;
echo nl2br("Comparison operators:\n");
print_r(nl2br(var_dump($a==$b)."\n"));
print_r(nl2br(var_dump($a!=$b)."\n"));
print_r(nl2br(var_dump($c!=$d)."\n"));
print_r(nl2br(var_dump($a<$b)."\n"));
print_r(nl2br(var_dump($a>$b)."\n"));
print_r(nl2br(var_dump($a<=$b)."\n"));
print_r(nl2br(var_dump($a>=$b)."\n\n"));

//Logical Operators
echo nl2br("Logical operators:\n");
echo nl2br("AND-OR:\n");
print_r("$a && ( $c or $d): ");
var_dump($a && ($c or $d));
echo nl2br("\n");
echo nl2br("AND-&&:\n");
print_r("$b && ($c AND $d): ");
var_dump($b && ($c AND $d));
echo nl2br("\n");
echo nl2br("!NOT:\n");
print_r("!$a AND $d): ");
var_dump(!$a AND $d);
echo nl2br("XOR:\n");
print_r("$b XOR $d): ");
var_dump($b XOR $d);
?>