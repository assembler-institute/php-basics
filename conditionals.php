<?php

# 1
$day = date("l");
switch($day){

    case 'Monday':
    echo "We are on Monday";
    break;

    default: echo "We are not on Monday";
}
echo "<br><br>";


# 2
$month = date("F");
switch($month){

    case 'October':
    echo "We are in October";
    break;

    default: echo $month;
}
echo "<br><br>";


# 3
$minute = date("i");
if($minute < 10) {
    echo "The current minute is less than 10";
} else if($minute > 15) {
    echo "The current minute is greater than 15";
} else {
    echo "Does not meet any conditions";
}
echo "<br><br>";


# 4
$weekDay = date("l");
switch($weekDay){

    case 'Monday':
        echo "Today it's Monday";
        break;

    case 'Tuesday':
        echo "Today it's Tuesday";
        break;
    
    case 'Wednesday':
        echo "Today it's Wednesday";
        break;
    
    case 'Thursday':
        echo "Today it's Thursday";
        break;

    case 'Friday':
        echo "Today it's Friday";
        break;

    case 'Saturday':
        echo "Today it's Saturday";
        break;

    case 'Sunday':
        echo "Today it's Sunday";
        break;

    default: echo $weekDay;
}
echo "<br><br>";

?>