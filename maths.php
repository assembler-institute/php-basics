<?php

getAbsolute(-5.63);
getRounded(-5.63);
getHighest([3,2,8,6,9,3,5]);
getLowest([3,2,8,6,9,3,5]);
getRandom(1,15.5);

/**
 * getAbsolute
 *
 * @param  mixed $number
 * @return void
 */
function getAbsolute($number){
    echo "<h4>Absolute:</h4>";
    echo abs($number); //Return integer
}

function getRounded($number){
    echo "<h4>Round:</h4>";
    echo round($number); //Return value rounded
}

function getHighest($numbers){
    echo "<h4>Highest:</h4>";

    foreach ($numbers as $value) {
        echo "$value ";
    }
    echo "max: ".max($numbers); //Return hightest number
}


function getLowest($numbers){
    echo "<h4>Lowest:</h4>";

    foreach ($numbers as $value) {
        echo "$value ";
    }
    echo "min: ".min($numbers); //Return hightest number
}

/**
 * getRandom
 *
 * @param  mixed $min
 * @param  mixed $max
 * @return void
 */
function getRandom(int $min,int $max){
    echo "<h4>Random Number:</h4>";
    echo rand($min,$max);
}
