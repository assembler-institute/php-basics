<?php
header("Content-type: text/plain");
// Create an example of use for arithmetic operators: +, -, *, /, and%
$a = 4;
$b = 2;
$c = 3;
//Addition
var_dump($a + $b);
//Substraction
var_dump($a - $b);
//Multiplication
var_dump($a * $c);
//Division
var_dump($a / $b);
var_dump($a / $c);
var_dump(intdiv($a, $c));
//Modulus
var_dump($a % $b);
var_dump($a % $c);
var_dump(fmod($a, $c));
//Exponentation
var_dump($a ** $b);

// Create a usage example for comparison operators: ==,! =, <,>, <=,> =
var_dump(0 == "0"); //Equal : Return true
var_dump(0 === "0"); //Identical : Return false
var_dump(0 != "0"); //Not equal : Return false
var_dump(0 <> "2"); //Not equal : Return true
var_dump(0 !== "0"); //Not identical : Return true
var_dump(0 < 2); //Less than : Return true
var_dump(0 > 2); //Greater than : Return false
var_dump(0 > 2); //Greater than : Return false
var_dump(2<=2); //Less than or equal to : Return true
var_dump(2>=5); //Greater than or equal to : Return false
var_dump("c" <=> "c"); //Spaceship : return 0 
var_dump("a" <=> "c"); //Spaceship : return -1 
var_dump("d" <=> "c"); //Spaceship : return 1 


// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
$a = (false && true);
$b = (true  || false);
$c = (true and true);
$d = (false  or  false);
$e = (!$a); 
$e = ($b xor $c); 

var_dump($a); //Return false
var_dump($b); //Return true
var_dump($c); //Return true
var_dump($d); //Return false
var_dump($e); //Return false
var_dump($d); //Return false