<?php

# echo
echo "Hello World!";
echo "<br><br>";
echo 1+1;
echo "<br><br>";

# print
print "I am me";
print "<br><br>";

# print_r
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
print "<br><br>";

$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results now contains output from print_r
echo $results

?>