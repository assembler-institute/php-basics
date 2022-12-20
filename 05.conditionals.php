<?php

$day = date("l"); // Get the current day of the week as a full textual representation (e.g. "Monday", "Tuesday", ..., "Sunday")

if ($day == "Monday") {
    echo "We are on Monday";
}

$date1 = new DateTime();
$day = $date->format("l"); // Get the current day of the week as a full textual representation (e.g. "Monday", "Tuesday", ..., "Sunday")

if ($day == "Monday") {
    echo "We are on Monday";
}


$month = date("F"); // Get the current month as a full textual representation (e.g. "January", "February", ..., "December")

if ($month == "October") {
    echo "We are in October";
} else {
    echo "We are in $month";
}

$date2 = new DateTime();
$month = $date2->format("F"); // Get the current month as a full textual representation (e.g. "January", "February", ..., "December")

if ($month == "October") {
    echo "We are in October";
} else {
    echo "We are in $month";
}

$minute = date("i"); // Get the current minute as a 2-digit number (e.g. "00", "01", ..., "59")

if ($minute < 10) {
    echo "The current minute is less than 10";
} elseif ($minute > 15) {
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}

$date3 = new DateTime();
$minute = $date3->format("i"); // Get the current minute as a 2-digit number (e.g. "00", "01", ..., "59")

if ($minute < 10) {
    echo "The current minute is less than 10";
} elseif ($minute > 15) {
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}


$day = date("l"); // Get the current day of the week as a full textual representation (e.g. "Monday", "Tuesday", ..., "Sunday")

switch ($day) {
    case "Monday":
        echo "It's the start of a new week!";
        break;
    case "Wednesday":
        echo "Hump day!";
        break;
    case "Friday":
        echo "TGIF!";
        break;
    case "Saturday":
        echo "Time to relax and enjoy the weekend!";
        break;
    case "Sunday":
        echo "End of the weekend, time to get ready for another week.";
        break;
    default:
        echo "Just another day...";
        break;
}


?>