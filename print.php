<?php

echo "<h1>Echo and print statements on PHP</h1>";

// echo hasn´t a return value
// print has a return value of 1
// print_r displays the information of variables in a more human-readable way
 
echo "<p>This text is write with the <b>echo</b> statement</p>";
print "<p>This one is write with <b>print</b> statement</p>";

echo "<hr>";
echo "<p>This last example is write with <b>print_r</b> stament</p>";
$fruits = array ("apple", "pear", "lemon");
print_r($fruits);

?>