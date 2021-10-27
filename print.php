<?php include './incl/header.php'?>
<?php
echo "<h1>PHP BASICS</h1>";
print "<h2>Hello PHP</h2>";
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);// Displays information about a variable in a way that's readable by humans
?>
<?php include './incl/footer.php'?>