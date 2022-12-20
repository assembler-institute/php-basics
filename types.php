<?php

/* boolean */

$a = true;
$b = false;

echo "<br><br>";

/* integer */

$c = 5985;
var_dump($c);

echo "<br><br>";

/* float */

$d = 10.365;
var_dump($d);

echo "<br><br>";

/* String */

$f = "Hello world!";
$g = 'Hello world!';

echo $f;
echo "<br>";
echo $g;

echo "<br><br>";

/* Array */

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<br><br>";

/* object */

$object = (object) [
  'propertyOne' => 'foo',
  'propertyTwo' => 42,
];

var_dump($object);
echo "<br><br>";

/* null */

$h = "Hello world!";
$i = null;
var_dump($i);

?>