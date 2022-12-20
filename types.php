<?php

echo ("<h1>Data types</h1>");

# Boolean

$typeBool = true;
var_dump($typeBool);
echo ("<hr>");
# Integer

$integer = 1;
var_dump($integer);
echo ("<hr>");
# Float

$float = 1.1;
var_dump($float);
echo ("<hr>");

# String

$string = "1";
var_dump($string);
echo ("<hr>");

# Array

$array = array(1);
var_dump($array);
echo ("<hr>");

# object

class typeBool{};
$object = new typeBool;
var_dump($object);
echo ("<hr>");

# NULL

$null = NULL;
var_dump($null);
echo ("<hr>");

?>