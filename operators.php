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

function divOfBoth(int $a, int $b){
    return $a % $b;
}
echo divOfBoth(70,7); 
echo "<br><br>";

// comparison operators

if($a < $b || $a <= $b){
    return -1;
}elseif ($a > $b && $a => $b){
    return 1;
}elseif ($a == $b){
    return 0;
}elseif($a != $b){
    return $a
}

?>