<?php

$currentDay = date("l");
$currentMonth = date("F");
$currentMinute = date("i");

echo "$currentDay  - $currentMonth - $currentMinute";
echo "<br><br><br>";
//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
echo ($currentDay == "Monday") ? "We are on Monday" :  "Today is $currentDay";


echo "<br><br><br>";

//Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime
echo ($currentMonth == "October") ? "We are on October" :  "Today is $currentMonth";


echo "<br><br><br>";

//If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
if ($currentMinute < 10) {
    echo "the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}


echo "<br><br><br>";
switch ($currentDay) {
    case 'Monday':
        echo "Today is Monday lets go";
        break;
    case 'Tuesday':
        echo "Today is Tuesday lets go";
        break;
    case 'Wednesday':
        echo "Today is Wednesday lets go";
        break;
    case 'Thursday':
        echo "Today is Thursday lets go";
        break;
    case 'Friday':
        echo "Today is Friday lets go";
        break;
    case 'Saturday':
        echo "Today is Saturday lets go";
        break;
    case 'Sunday':
        echo "Today is Sunday lets go";
        break;
    default:
        echo "Where are you bro";
}
