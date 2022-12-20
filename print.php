<?php 

print "<h1>Print method</h1>";
$line = "<br />";
echo "First <b>echo</b>$line";
print "First <b>print</b>$line";

$a = array ('one' => 'car', 'two' => 'motorbike', 'three' => array ('1', '2', '3'));
print "First <b>print_r</b>  -->  "; 
print_r ($a, false);
