<?php
// Generate an instruction that makes use of "echo"
echo "echo";

// Generate an instruction that makes use of "print"
print("Hello world");

// Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$a = array ('a' => 'Hello', 'b' => 'world', 'c' => array ('x', 'y', 'z'));
print_r ($a);
?>