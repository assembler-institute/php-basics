<?php
$style= "style='font-family: helvetica;'";
$line="style='border: 1px solid rgb(230,230,230);'";
$td="style='border: 1px solid rgb(230,230,230); padding: 10px;font-family: helvetica;'";

print("<h3 $style> - - Create an example of use for arithmetic, comparison & logical operators</h3>");

//Create an example of use for arithmetic operators: +, -, *, /, and%
print("<h5 $style>Snippet [ arithmetic operators ] </h5>");
print("<pre style='font-size: 15px'>
x = 2;
y = 4;

var_dump(x + y);
var_dump(x - y);
var_dump(x * y);
var_dump(x / y);
var_dump(x % y);
</pre>");
print("<h5 $style>Output</h5>");

// CODE
$x = 2;
$y = 4;

print("x + y = ");
var_dump($x + $y);
print("<br />");
print("x - y = ");
var_dump($x - $y);
print("<br />");
print("x * y = ");
var_dump($x * $y);
print("<br />");
print("x / y = ");
var_dump($x / $y);
print("<br />");
print("x % y = ");
var_dump($x % $y);

print("<hr $line/>");

//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
print("<h5 $style>Snippet [ comparison operators ] </h5>");
print("<pre style='font-size: 17px'>
a = 5;
b = 5;
</pre>");

print("
<table>
   <tr>
     <td $td>Igual | <b>var_dump(1 == TRUE)</td>
     <td $td>Idéntico | <b>var_dump(a === b)</td>
     <td $td> Diferente | <b>var_dump(100 != 10) | var_dump(100 <> 10)</td>
   </tr>
   <tr>
     <td $td>No Idéntico | <b>var_dump(a !== b)</td>
     <td $td>Menor que | <b>var_dump(1 < 2)</td>
     <td $td>Mayor que | <b>var_dump(3 > 5)</td>
   </tr>
   <tr>
     <td $td>Menor que o igual | <b>var_dump(2 <= 2)</td>
     <td $td>Mayor que o igual | <b>var_dump(7 >= 9)</td>
     <td $td>Un integer menor que, igual a, o mayor que cero cuando a es <br />respectivamente menor que, igual a, o mayor que b<br /><b>var_dump(a <=> b)</td>
   </tr>
   <tr>
     <td $td>El primer operando de izquierda a <br />derecha que exista y no sea null<br />
     <b>var_dump(a ?? b)</td>
   </tr>
</table>");

print("<h5 $style>Output</h5>");

// CODE
var_dump(1 == TRUE);
print("<br />");

$a = 5;
$b = 5;
var_dump($a === $b);
print("<br />");

var_dump(100 != 10);
var_dump(100 <> 10);
print("<br />");

var_dump($a !== $b);
print("<br />");

var_dump(1 < 2);
print("<br />");

var_dump(3 > 5);
print("<br />");

var_dump(2 <= 2);
print("<br />");

var_dump(7 >= 9);
print("<br />");

var_dump($a <=> $b);
print("<br />");

var_dump($a ?? $b);
print("<br />");

print("<hr $line/>");


// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
print("<h5 $style>Snippet [ logical operators ] </h5>");
print("<pre style='font-size: 15px'>
var_dump(a and b) true si tanto a como b son true
var_dump(a or b) true si cualquiera de a o b es true
var_dump(a xor b) true si a o b es true, pero no ambos
var_dump(!a) true si a no es true
var_dump(a && b) true si tanto a como b son true
var_dump(a || b) true si cualquiera de a o b es true
</pre>");
print("<h5 $style>Output</h5>");

// CODE
var_dump($a and $b);
print("<br />");
var_dump($a or $b);
print("<br />");
var_dump($a xor $b);
print("<br />");
var_dump(!$a);
print("<br />");
var_dump($a && $b);
print("<br />");
var_dump($a || $b);
?>