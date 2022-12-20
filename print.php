<?php
require './globals.php';

echo '<h2>print.php</h2>';

hr();

// Generate an instruction that makes use of "echo"
echo '<h4>Generate an instruction that makes use of "echo"</h4>';
echo '<pre>echo "Echo instruction"</pre> ==> ';
echo 'Echo instruction';

hr();

// Generate an instruction that makes use of "print"
echo '<h4>Generate an instruction that makes use of "print"</h4>';
echo '<pre>print "Print instruction"</pre> ==> ';
print 'Print instruction';

hr();

// Generate an instruction that makes use of "print_r"
echo '<h4>Generate an instruction that makes use of "print_r"</h4>';
echo '
<pre>
$a = array ("a" => "manzana", "b" => "banana", "c" => array ("x", "y", "z"));
print_r ($a);
</pre> ==> ';
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);