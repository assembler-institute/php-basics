<?php

$number = 33.33;
function absolute($number) {
    return abs($number);
}
echo abs($number);
echo "<br>";

function rounded($number) {
return ceil($number);
}
echo ceil($number);
echo "<br>";

$myArray = array(2,4,6,8,10,12);
function lowestValue($myArray) {
    return min($myArray);
}
echo min($myArray);
echo "<br>";

function highestValue($myArray) {
    return max($myArray);
}
echo max($myArray);
echo "<br>";

function random() {
    return rand(1, 1000);
}
echo rand(1, 1000);
echo "<br>";

absolute($number);
rounded($number);
lowestValue($myArray);
highestValue($myArray);
random();

?>