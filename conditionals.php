<?php

// set default timezone

date_default_timezone_set('Europe/Madrid');

$weekDay = date('w');
$month = date('F');
$minutes = date('i');

// check if today is monday

if ($weekDay == 1) {
    echo 'Today is Monday <br>';
}

// check if month is october

if ($month == "October") {
    echo "We are in " . $month ."<br>";
} else {
    echo $month . "<br>";
}

//check minutes

if($minutes < 10){
    echo "the current minute is less than 10 <br>";
} else if ($minutes > 15){
    echo "the current minute is more than 15 <br>";
} else{
    echo "does not meet any conditions <br>";
}

//display different message depending on what day today is

switch ($weekDay) {
    case 1:
        echo "Hey man, today is Monday <br>";
        break;
    case 2:
        echo "Hey man, today is Tuesday <br>";
        break;
    case 3:
        echo "Hey man, today is Wednesday <br>";
        break;
    case 4:
        echo "Hey man, today is Thursday <br>";
        break;
    case 5:
        echo "Hey man, today is Friday <br>";
        break;
    case 6:
        echo "Hey man, today is Saturday <br>";
        break;
    case 0:
        echo "Hey man, today is Sunday <br>";
        break;
    
    default:
        echo "Never getting here...";
        break;
}

