<?php

$a = date("l");

if($a = "Monday") {
    echo "We are on Monday";
}

echo "<br><br>";

/* Punto 2 */

$b = date("F");

if($b == "October") {
    echo "We are in October";
} else {
    echo "We are on $b";
}

echo "<br><br>";

/* PUNTO 3 */

$c = date("i");

if($c <= "10") {
    echo "The current minute is less than 10";
} elseif($c >= "16") {
    echo "The current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

echo "<br><br>";

/* PUNTO 4 */

$day = date("l");

switch($day) {

    case "Monday";
    echo "Today is Monday";
    break;

    case "Tuesday";
    echo "Today is Tuesday";
    break;

    case "Wednesday";
    echo "Today is Wednesday";
    break;

    case "Thursday";
    echo "Today is Thursday";
    break;

    case "Friday";
    echo "Today is Friday";
    break;

    case "Saturday";
    echo "Today is Saturday";
    break;

    default: echo "Today is the las day of the week";

}



?>