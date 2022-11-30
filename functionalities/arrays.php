<?php
//define a array of strings
$arr = array("hello", "world", "my", "name","is","jc");
//define a array of whole and decimail numbers
$num = array(1,2.6,3,9.8);
//define a miltidimensional array
$arr_multi = array(array(1,2,3),array(4,5,6),array(7,8,9));
//Execute the function that allows to obtain the length of an array
print_r(count($arr).nl2br("\n"));
echo nl2br("\n");
//Execute the function that allows to obtain the combination of two arrays
print_r(array_merge($arr,$num,$arr_multi));
echo nl2br("\n");
//Execute the function that once is given an array return the last element of it
print_r(array_pop($num).nl2br("\n"));
echo nl2br("\n");
//Execute the function that once is given an array add a new element to the array in question
array_push($num, 30000);
print_r($num).nl2br("\n");
echo nl2br("\n");
?>