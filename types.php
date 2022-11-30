<?php
$style = "style='font-family: helvetica;'";

print("<h3 $style> - - Define a new variable and assign a value</h3>");

//Define a new variable and assign a value

print("<h5 $style>Snippet [ variable ] </h5>");

print("<pre style='font-size: 15px'>
boolean = true;
integer = 10;
float = 1.6;
string = 'Hello!';
array = [1,2,3,4,5];

object = new stdClass();
object->name = 'Pablo';
object->id = 'de23op';

NULL = '';
</pre>");

$boolean = true;
$integer = 10;
$float = 1.6;
$string = "Hello!";
$array = [1, 2, 3, 4, 5];

$object = new stdClass();
$object->name = 'Pablo';
$object->id = 'de23op';

$NULL = "";

print("<h5 $style>Output</h5>");

var_dump($boolean);
print("<br />");
var_dump($integer);
print("<br />");
var_dump($float);
print("<br />");
var_dump($string);
print("<br />");
var_dump($array);
print("<br />");
var_dump($object);
print("<br />");
var_dump($NULL);
