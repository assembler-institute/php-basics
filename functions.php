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


$x=100;
$y=60;
echo "The sum of x and y is : ". ($x+$y) ."<br />";
echo "The difference between x and y is : ". ($x-$y) ."<br />";
echo "Multiplication of x and y : ". ($x*$y) ."<br />";
echo "Division of x and y : ". ($x/$y) ."<br />";
echo "Modulus of x and y : " . ($x%$y) ."<br />";
?>

