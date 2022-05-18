<?php
header("Content-type: text/plain");
// Define a new variable and assign a value to each of the following types:
$exist = true; //Boolean
var_dump($exist);
$integerNumber = 5; //Integer
var_dump($integerNumber);
$floatNumber = 1.7; //Float
var_dump($floatNumber);
$text = "Hello World!"; //String
var_dump($text);
$textNumeric = "1.3e3"; //Numeric String
var_dump($textNumeric);
$arr = array("hello", "world"); //Array
var_dump($arr);
$arr1 = [1, 2, 3, 4, 5]; //Array
var_dump($arr1);

class foo
{
    function do_foo()
    {
        echo 'Doing foo';
    }
}
$object = new foo; //Object
var_dump($object);
