<?php

$animals = array("dog", "cat", "wolf", "parrot", "monkey");

$numbers = array(1,2.2,3,3.3,4,4.4);

$species = array(
    array("dog", "wolf", "coyote"),
    array("cat", "tiger", "lion"),
    array("macaque", "mandrill", "baboon"),
);

function lengthArray ($numbers){
    return count($numbers);
}
echo count($numbers);
echo "<br>";

function arrayMerge() {
    return array_merge($animals, $numbers);
};
print_r(array_merge($animals, $numbers));
echo "<br>";

function lastElement($animals){
    return end($animals);
};
echo end($animals);
echo "<br>";


array_push($numbers, 5, 5.5);
print_r($numbers);

?>