<?php
// If statement
echo "<h4>Print if 'Monday'</h4>";

$currentDay = date("l");

if ($currentDay == "Monday"){
    echo "Today is Monday";
} else {
    echo "Not Monday, today is $currentDay";
}

// If/Else statement
echo "<h4>Print if/else 'October'</h4>";

$currentMonth = new DateTime();

if (date("F") == "October"){
    echo "It is October";
} else {
    echo "Not October, we are in ", $currentMonth -> format('F');
}

// If/Elseif/Else statement
echo "<h4>Print if/elseif/else minutes</h4>";

$currentMinute = date("i");

if ($currentMinute < 10){
    echo "The current minute is less than 10";
} elseif ($currentMinute > 15){
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}

// Switch statement
echo "<h4>Swtich</h4>";

$currentWeekday = date("l");

switch($currentWeekday){
    case "Monday":
        echo "Still the beginning of the week :___)";
        break;
    case "Tuesday":
        echo "Still the beginning of the week :___)";
        break;
    case "Wednesday":
        echo "Mid-week, almost done!";
        break;
    case "Thursday":
        echo "Mid-week, almost done!";
        break;
    case "Friday":
        echo "It's Friday, yay!";
        break;
    case "Saturday":
        echo "Enjoy the weekend!";
        break;
    case "Sunday":
        echo "Enjoy the weekend!";
        break;
    default:
        echo "Not valid weekday";
}
?>