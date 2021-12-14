<?php

$strs = ["hola", "caracola", "assemblers"];
print_r ($strs);
echo "<br>";
$nmbr = array(1, 2, 3.15, 12);
print_r ($nmbr);
echo "<br>";
$array2 = array("hola", 12 , array(1,2,3));
print_r($array2);
echo "<br>";
echo count($strs)."<br>";
print_r(array_merge($strs, $nmbr));
echo "<br>";
echo end($strs)."<br>";
array_push($nmbr, "añadido");
print_r($nmbr);




?>