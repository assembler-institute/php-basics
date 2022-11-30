<?php

//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
$date = getdate()['weekday'];

if ($date == "Monday") {
    echo "We are on Monday";
} 


//Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
$month = getdate()['month'];

if ($month == "October") {
    echo "<br>"."We are in October";
} else {
    echo "<br>"."We are in ".$month;
}


//Create a double condition that evaluates:
// If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
$currentMinute = getdate()['minutes'];

if ($currentMinute < 10) {
    echo "<br>"."the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo "<br>"."the current minute is more than 15";
} else {
    echo "<br>"."does not meet any conditions";
}


//Create a switch type control structure to display a different message depending on the current day of the week. 
$day = getdate()['weekday'];

switch($day) {
    case "Monday":
        echo "<br>"."Today is Monday";
        break;
    case "Tuesday":
        echo "<br>"."Today is Tuesday";
        break;
    case "Wednesday":
        echo "<br>"."Today is Wednesday";
        break;
    case "Thursday":
        echo "<br>"."Today is Thursday";
        break;
    case "Friday":
        echo "<br>"."Today is Friday";
        break;
    case "Saturday":
        echo "<br>"."Today is Saturday";
        break;
    case "Sunday":
        echo "<br>"."Today is Sunday";
        break;
    default:
        echo "<br>"."Not a valid day";
}

