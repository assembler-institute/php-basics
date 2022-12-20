<?php

#CONDITION

$date = new DateTime();


#CURRENT DAY

$currentDay = $date->format('D');

if ($currentDay == 'Mon') {
    echo "We are on Monday";
} 

echo '<br><br>';

#CURRENT MONTH

$currentMonth = $date->format('M');

if ($currentMonth == 'Oct') {
    echo "We are in October";
} else {
    echo "We are in $currentMonth";
}

echo '<br><br>';



#CURRENT MINUTE

$currentMinute = $date->format('i');

if ($currentMinute < 10) {
    echo "The current minute is less than 10";
} else if ($currentMinute > 15) {
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}
echo '<br><br>';

#SWITCH

switch ($currentDay) {
    case 'Mon':
        echo "Start the week of classes";
        break;

    case 'Tue':
        echo "Second day of classes";
            break;

    case 'Wen':
        echo "Third day of classes";
            break;

    case 'Thu':
        echo "Fourth day of classes";
            break;

    case 'Wen':
        echo "Last day of classes";
            break;
    
    default:
        echo "Is weekend";
        break;
}




?>