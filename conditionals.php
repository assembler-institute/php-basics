<?php
header("Content-type: text/plain");
// Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
if (date('l') === "Monday") {
    echo "We are on Monday\n";
}
// Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
if (date('m') === "10") {
    echo "We are in October\n";
}

if (date('F') === "October") {
    echo "We are in October\n";
} else {
    echo "We are in " . date('F') . "\n";
}

/*Create a double condition that evaluates:
If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions” */
if (date('i') < 10) {
    echo "the current minute is less than 10\n";
} elseif (date('i') > 15) {
    echo "the current minute is more than 15\n";
} else {
    echo "does not meet any conditions\n";
}


/*Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it. */
$currentDay = date('w');
echo $currentDay."\n";
switch ($currentDay) {
    case '1':
        echo "Today is Monday\n";
        break;
    case '2':
        echo "Today is Tuesday\n";
        break;
    case '3':
        echo "Today is Wednesday\n";
        break;
    case '4':
        echo "Today is Thursday\n";
        break;
    case '5':
        echo "Today is Friday\n";
        break;
    case '6':
        echo "Today is Saturday\n";
        break;
    case '7':
        echo "Today is Sunday\n";
        break;

    default:
        break;
}
