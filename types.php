<?php

#Boolean

echo "These are boolean types: <br><br>";

$a = true;
$b = false;

var_dump($a, $b);
echo "<br><br>";

#Integer 

echo "This is integer type: <br><br>";

$c = 5;

var_dump($c);
echo "<br><br>";

#Float

echo "This is a float type: <br><br>";

$d = 10.232423;

var_dump($d);
echo "<br><br>";

#string

echo "This is a string: <br><br>";

$e = "Hello Wilson<br>";
var_dump($e);

echo "<br><br>";

#array

echo "This is an array: <br><br>";

$array = array(
    "foo" => "var",
    "bar" => "foo",
);

var_dump($array);
echo "<br><br>";

#object 

echo "This is an object: <br><br>";

$object = (object)array("tedi"=>"bear");

var_dump($object);

?>