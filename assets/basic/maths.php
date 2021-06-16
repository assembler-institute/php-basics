<?php
// Absolute number
echo "<h4>Absolute number</h4>";

function returnAbsolute(){
    return abs(-30.5);
}

$absVariable = returnAbsolute();
echo $absVariable;

// Rounded to highest integer
echo "<h4>Rounded to highest integer</h4>";

function returnRounded(){
    return ceil(5.2);
}

$rndVariable = returnRounded();
echo $rndVariable;

// Return highest number
echo "<h4>Return highest number</h4>";

$numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function returnHighest($array){
    return max($array);
}

$highVariable = returnHighest($numbersArray);
echo $highVariable;

// Return lowest number
echo "<h4>Return lowest number</h4>";

function returnLowest($array){
    return min($array);
}

$lowVariable = returnLowest($numbersArray);
echo $lowVariable;

// Return random number
echo "<h4>Return random number (between 0 & 100)</h4>";

function returnRandom(){
    return rand(0, 100);
}

$rndVariable = returnRandom();
echo $rndVariable;
?>