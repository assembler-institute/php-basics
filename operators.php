<?php
// Operators -, +, *, /, %
function sumOfBoth(int $a, int $b){
    return $a + $b;
}
echo sumOfBoth(5,7); 
echo "<br><br>";

function multOfBoth(int $a, int $b){
    return $a * $b;
}
echo multOfBoth(10,7); 
echo "<br><br>";

function divOfBoth(int $a, int $b){
    return $a / $b;
}
echo divOfBoth(70,7); 
echo "<br><br>";

function prOfBoth(int $a, int $b){
    return $a % $b;
}
echo prOfBoth(70,7); 
echo "<br><br>";

// Create a usage example for comparison operators: ==,! =, <,>, <=,> =
$a = 4;
$b = 3; 

if($a < $b){
    return -1;
}elseif ($a > $b){
    return 1;
}elseif ($a == $b){
    return 0;
}elseif($a != $b){
    return $a;
}

// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor


?>



