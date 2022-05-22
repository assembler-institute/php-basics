<?php

/* Hay dos tipos, las Internal Functions(Build-in) y las User defined functions.
El nombre lo dicer todo. */



/* Ejemplos de Internal functions (Built-in)

String replace: ejemplo: */


/* $a = "Hello world";   No me sale en el echo, REVISAR Y PREGUNTAR

str_replace("world", "Daniel", $a);
 */



/* $a = "Hi";    Tampoco sale en el echo, REVISAR Y PREGUNTAR
str_repeat($greeting, 3);

echo $a; */




/* $a = "Hello World";  No entiendo este tipo de Arrays, solo busca el "lo"? Preguntar
$chars = "lo";
stripos($a, $chars);
 */


/* Ejemplos de User defined functions:
myFunction();
echo personInfo("Daniel", 28); */





/* declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4); */




function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;












/* 
https://www.exakat.io/en/top-100-php-functions/
https://www.youtube.com/watch?v=t9FrpTZm1ds
https://www.php.net/manual/en/functions.internal.php
https://www.php.net/manual/en/functions.user-defined.php
https://www.youtube.com/watch?v=RIPJEgOrVRc

https://www.php.net/manual/en/indexes.functions.php*/
?>