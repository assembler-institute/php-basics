<?php
//Boolean
$bool = true;
//Integer
$num = 5;
//Float
$floatNum = 1.2;
//string
$str = "Hello, World";
//Array
$arr = array(1,2,3,4);
//object class
class foo{
    function getFoo(){
        echo nl2br("We are declaring an object method\n");
    }
}

$foo_Obj = new foo();
$foo_Obj -> getFoo();

//Converting array to an object
$arr_obj = (object) $arr;
print_r($arr_obj).nl2br("\n");

//NULL
$empty = null;
?>