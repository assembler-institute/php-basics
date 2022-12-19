<?php

// Return an absolute number
function absolute(){
 $absolute = var_dump(abs(5-10));
 return $absolute;
}

absolute();

// Return a rounded of a decimal number
function roundExcercise(){
    $round = round(5.8);
    return $round;
}

roundExcercise();

// Return the greater of an array
function mayor($num){
    return $max = max($num);
}

$arrNum = array(1, 5, 3, 10);
mayor($arrNum);

// return de least number
function minor($num){
    return $min = min($num);
}

minor($arrNum);

// Return a random number between 1 and 100
function randomNum(){
    print rand(1, 100);
}

randomNum();