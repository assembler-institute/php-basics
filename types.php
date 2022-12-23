<?php
$bool = true;
var_dump($bool);
echo "<br>";

$int = 5;
var_dump($int);
echo "<br>";

$float = 5.0;
var_dump($float);
echo "<br>";

$string = "hello";
var_dump($string);
echo "<br>";

$array = [1, 2, 3];
var_dump($array);
echo "<br>";

$object = (object) [
    'propertyOne' => 'foo',
    'propertyTwo' => 42,
  ];
var_dump($object);
echo "<br>";

$null;
var_dump($null);
echo "<br>";
?>