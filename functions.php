<?php

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


function all(int $a,int $b, int $c, int $d){
    return $a + $b * $c / $d;
}
echo all(70, 7, 8, 6); 
echo "<br><br>";
?>

