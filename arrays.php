<?php
echo "<br/>";
$array =["benito","pedro","rauw" ];
$array2 = [2, 2.3, 4, 8, 1, 3.2];
var_dump($array2);
echo "<br/>";
$array3 = [[1,2,3,4],["jose","carlos", "manu"]];
var_dump($array3);
echo "<br/>";
var_dump(count($array));
echo "<br/>";
echo end($array2);
echo "<br/>";

array_push($array3, ["benito", "ale", "marta"]);
print_r($array3);

