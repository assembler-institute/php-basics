<?php

$array = ["hello", "how", "are", "you", "?"];
print_r ($array);
echo "<br>";

$array2 = [1, 2, 3.5, 4, 5.5];
print_r ($array2);
echo "<br>";

$array3 = [["hello" , "and", "welcome"], ["how", "are", "you", "?"]];
print_r ($array3);
echo "<br>";

echo "length: ", count($array);
echo "<br>";

$arrayMerge = array_merge($array3, $array);
print_r ($arrayMerge);
echo "<br>";

echo "last element of the first array is: ", end($array);
echo "<br>";

array_push($array, "Hello");
print_r ($array);

?>