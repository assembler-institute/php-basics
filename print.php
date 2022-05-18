<?php
header("Content-type: text/plain");
//Echo
echo "Hello, this is my first script of php." . PHP_EOL . "This ", "is ", "a ", "multiparameter ", "string.\r\n";
//Print
$value = print "Hello, this is my first statement using print.\r\n";
echo "Return of value =  $value"; //Must be 1
//Print_r
$a = array ("a" => "apple", "b" => "banana", "c" => array("x", "y", "z"));
print_r($a);
//Return parameter to true
$b = array ("a" => "apple", "b" => "banana", "c" => array("x", "y", "z"));
$result = print_r($b, true);
print_r($result);


