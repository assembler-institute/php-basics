<?php

#Create a simple condition that evaluates whether the current day is Monday.

$currentDay = date('l');
$currentMonth = date('m');

if (date('l') === 'Monday') {
    echo "We are on Monday";
}else{echo "Today is&nbsp". date("l");
}

echo "<br>";

#Create a simple condition that evaluates whether the current month is October.

if (date('m') === "October"){
    echo "We are in October";
}else{
    echo "Today is&nbsp". date('F');
}

echo "<br>";

#Create a double condition

$currentMinute = date('i');

if($currentMinute < 10){
    echo "The current minute is less than 10";
}else if($currentMinute > 15){
    echo "The current minute is more than 15";
}else{
    echo "Does not meet any conditions";
}

echo "<br>";

#Create a switch type control structure to display a different message depending on the current day of the week. 

$day = date('D');

switch($day){
    case 'Sun';
    echo "Today is Sunday";
    break;
    case 'Sat';
    echo "Today is Saturday";
    break;
    case 'Fri';
    echo "Today is Friday";
    break;
    case 'Thu';
    echo "Today is Thursday";
    break;
    case 'Wed';
    echo "Today is Wednesday";
    break;
    case 'Tue';
    echo "Today is Tuesday";
    break;
    case 'Mon';
    echo "Today is Monday";
    break;
}
?>