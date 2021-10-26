<?php
//Create a simple condition that evaluates whether the current day is Monday,
// Only in the case that the condition is met, it shows a message of “We are on Monday”.
$day = date('l');
if ($day == 'Monday') {
    echo "We are on Monday";
} 

//Create a simple condition that evaluates whether the current month is October,
// If the condition is met, it shows a message of the type "We are in October",
// Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
$currentMonth = date("F");
if ($currentMonth == "October") {
echo " We are in October";
}
else echo "we are in $currentMonth";

//Create a double condition that evaluates: if the current minute is less than 10,
//Displays a message of type "the current minute is less than 10", if the current minute is greater than 15,
// displays a message of the type "the current minute is more than 15",
// If you do not meet any of the two conditions above: Displays a message of the type
// "does not meet any conditions”

$currentMinute = date("i");
if ($currentMinute < 10) {
echo " the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo " the current minute is more than 15";
} else {
    echo " does not meet any conditions";
}

//Create a switch type control structure to display a different message depending on the current day of the
// week. You can write any type of message because the important thing is that you understand how it works
// and in what cases you can use it.

$day = date('l');
switch ($day) {
    case 'Monday':
        echo " $day";
        break;
    case 'Tuesday':
        echo " $day";
        break;
    case 'Wednesday':
        echo " $day";
        break;
    case 'Thursday':
        echo " $day";
        break;
    case 'Friday':
        echo " $day";
        break;
    case 'Saturday':
        echo " $day";
        break;
    case 'Sunday':
        echo " $day";
        break;
}
