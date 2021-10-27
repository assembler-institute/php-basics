<?php

echo "<h4>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of 'We are on Monday'.</h4>";

$date = new DateTime();
$day = $date->format('N');

if ($day == 1) {
    echo "We are on Monday";
}

echo "<h4>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type \"We are in October\". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
</h4>";

if ($date->format('m') == 10) {
    echo "We are in October";
}

echo "<h4>If the current minute is less than 10. Displays a message of type \"the current minute is less than 10\", if the current minute is greater than 15, displays a message of the type \"the current minute is more than 15\". If you do not meet any of the two conditions above: Displays a message of the type \"does not meet any conditions\"</h4>";

if ($date->format('i') < 10) {
    echo "the current minute is less than 10";
} else if ($date->format('i') > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

echo "<h4>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
</h4>";


$result = match($date->format('N')) {
    "1" => "Monday",
    "2" => "Tuesday",
    "3" => "Wednesday",
    "4" => "Thursday",
    "5" => "Friday",
    "6" => "Saturday",
    "7" => "Sunday",
    default => "Error"
};

echo $result;
