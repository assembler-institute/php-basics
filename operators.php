<?php
// Operators -, +, *, /, %

var_dump(1 + 1);
echo "<br><br>";
var_dump(1 - 1);
echo "<br><br>";
var_dump(1 * 2);
echo "<br><br>";
var_dump(10 / 5);
echo "<br><br>";
var_dump(10 % 1);
echo "<br><br>";

// Create a usage example for comparison operators: ==,! =, <,>, <=,> =
var_dump(1 == TRUE);  
var_dump(0 != FALSE); 
var_dump(10 > 9); 
var_dump(7 < 8);
echo "<br><br>";
$hi = (object) ["hi" => "hi"]; 
$biy = (object) ["biy" => "biy"]; 
echo $hi <=> $biy;
echo "<br><br>";

// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor

$o = true && false;
var_dump($o);
$y = false && true;
var_dump($y);
$z = true && true;
var_dump($z);
$r = false && false;
var_dump($r);
$q = true || false;
var_dump($q);
$l = false || true;
var_dump($l);
$d = true || true;
var_dump($d);
$s = false || false;
var_dump($s);
echo "<br><br>";


$var='10am';
if($var !='12pm'){
echo 'Get To Work';
}else{
echo 'Break Time!';
}
?>



