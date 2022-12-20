<?php 

$array = array(1,2,3,14,5,6,7,8);
$absoulteValue  = abs(-12);
$roundSupResult = ceil(2.67);
$max = max($array);
$min = min($array);
$random = rand();

print "<h2>Maths</h2>";

echo "<li>Absolute value: <b>", $absoulteValue , "</b></li>";
echo "<li>Rounded higher integer value: <b>", $roundSupResult, "</b></li>";
echo "<li>Highest integer value: <b>", $max, "</b></li>";
echo "<li>Lowest integer value: <b>", $min, "</b></li>";
echo "<li>Random value: <b>", $random, "</b></li>";


?>