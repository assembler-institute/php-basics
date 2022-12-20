<?php
date_default_timezone_set('Europe/Madrid');

$weekDay = date('w');
$month = date('F');
$minutes = date('i');

if ($weekDay == 1) {
    echo 'Today is Monday <br>';
}

if ($month == "October") {
    echo "We are in " . $month ."<br>";
} else {
    echo $month . "<br>";
}

if($minutes < 10){
    echo "the current minute is less than 10 <br>";
} else if ($minutes > 15){
    echo "the current minute is more than 15 <br>";
} else{
    echo "does not meet any conditions <br>";
}

switch ($weekDay) {
    case 1:
        echo "Hey man, today is Monday";
        break;
    case 2:
        echo "Hey man, today is Tuesday";
        break;
    case 3:
        echo "Hey man, today is Wednesday";
        break;
    case 4:
        echo "Hey man, today is Thursday";
        break;
    case 5:
        echo "Hey man, today is Friday";
        break;
    case 6:
        echo "Hey man, today is Saturday";
        break;
    case 0:
        echo "Hey man, today is Sunday";
        break;
    
    default:
        echo "Never getting here...";
        break;
}

