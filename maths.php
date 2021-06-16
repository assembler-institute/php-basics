<?php
// Absolute number
echo "<p>Absolute number</p>";

function returnAbsolute(){
    return abs(-30.5);
}

$absVariable = returnAbsolute();
echo $absVariable;

// Rounded to highest integer
echo "<p>Rounded to highest integer</p>";

function returnRounded(){
    return ceil(5.2);
}

$rndVariable = returnRounded();
echo $rndVariable;

// Return highest number
echo "<p>Return highest number</p>";

$numbersArray = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function returnHighest($array){
    return max($array);
}

$highVariable = returnHighest($numbersArray);
echo $highVariable;

// Return lowest number
echo "<p>Return lowest number</p>";

function returnLowest($array){
    return min($array);
}

$lowVariable = returnLowest($numbersArray);
echo $lowVariable;

// Return random number
echo "<p>Return random number (between 0 & 100)</p>";

function returnRandom(){
    return rand(0, 100);
}

$rndVariable = returnRandom();
echo $rndVariable;
?>