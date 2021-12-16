<?php

echo "Hello world!";

$txt = 'Learning';
print '<h2> . $txt . </h2>';


$a1 = array ("fruit" =>["apples", "oranges", "pears"]);
$a2 = 'This is a string';
$a3 = 5.6;

//$array = array_push(array ("fruit" => $a1, "vegies" => $a2, "money" => $a3));
print_r($a1);
print_r($a2); 

//let use print_r to return a value and save it 
$ar3ref = print_r($a3, true);

//use echo to print to output the returned value
echo "\n".$ar3ref;

?>