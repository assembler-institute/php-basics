<?php

$arrayString = array("uno","dos","cuatro","cinco");
print_r($arrayString);
echo "<br>";

$arrayNumbers = array(1,2,4,5);
$arrayNumbers2 = array(5,2,2,2);
print_r($arrayNumbers);
echo "<br>";

$arrayMultidimentsional = array(1,array(9,8,7),4,5.3);
print_r($arrayMultidimentsional);
echo "<br>";

echo count($arrayMultidimentsional);
echo "<br>";

print_r(array_merge($arrayString,$arrayNumbers));
echo "<br>";
print_r(array_combine($arrayString,$arrayNumbers));
echo "<br>";
print_r(array_intersect($arrayNumbers2,$arrayNumbers));
echo "<br>";
print_r(array_diff($arrayNumbers2,$arrayNumbers));
echo "<br>";
// print_r(array_count_values($arrayNumbers2,$arrayNumbers));
// echo "<br>";

print_r(end($arrayNumbers));
echo "<br>";

array_push($arrayNumbers,8);
print_r($arrayNumbers);
echo "<br>";

?>