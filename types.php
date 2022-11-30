<!-- Create a file called types.php
This file as its name properly indicates will be used for working with the different basic types of variables and data:
Define a new variable and assign a value to each of the following types:
boolean
integer
integer
string
array
object
NULL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$boolean;
$integer;
$float;
$string;
$array;
$object;

settype($boolean, "bool");
settype($integer, "int");
settype($float, "float");
settype($string, "string");
settype($array, "array");
settype($object,"object");

var_dump($boolean);
var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($array);
var_dump($object);


?>

</body>
</html>