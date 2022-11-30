<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Generate an instruction that makes use of "echo"
echo 'This is <strong>echo</strong> message';
echo '<br><br>';

// Generate an instruction that makes use of "print"
print 'This is a <strong>print</strong> message';
echo '<br><br>';

// Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$a = array('a' => 'manzana', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);

require_once('../foot.php');
