<?php
$d = new DateTime();
$wd = $d->format('D');
$M = $d->format("F");
$m = $d->format("i");
$iso = $d->format("N");

// Create a simple condition that evaluates whether the current day is Monday.
// Only in the case that the condition is met, it shows a message of “We are on Monday”.

if ($wd == "Mon")    echo "We are on Monday";
else    echo "IT'S WEDNSDAY MY DUDES UEEEEEEEEEEEEH";

echo "<br>";
// Create a simple condition that evaluates whether the current month is October.
// If the condition is met, it shows a message of the type "We are in October".
// Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

if($M == "October") echo "We are in October";
else echo $M;
echo "<br>";
// Create a double condition that evaluates:
// If the current minute is less than 10.
// Displays a message of type "the current minute is less than 10", if the current minute is greater than 15,
// displays a message of the type "the current minute is more than 15".
// If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”

if ($m <10) echo "the current minute is less than 10";
else if( $m<15) echo "the current minute is more than 15";
else echo "does not meet any conditions";

echo "<br>";
// Create a switch type control structure to display a different message depending on the current day of the week.
// You can write any type of message,
// because the important thing is that you understand how it works and in what cases you can use it.

$switch = match(true){
    $iso == 1 => "Lunes",
    $iso == 2 => "Martes",
    $iso == 3 => "Miércoles",
    $iso == 4 => "Jueves",
    $iso == 5 => "Viernes",
    $iso == 6 => "Sábado",
    $iso == 7 => "Domingo",
    default => "Nah"
};
echo $switch;