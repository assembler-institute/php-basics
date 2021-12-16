<?php

$weekDay = date('l');

if($weekDay == 'Monday') {
    echo 'We are on Monday';
} else {
    echo 'We are not on Monday';
};

echo '<br>';

$month = date('F');
if ($month == 'October') {
    echo 'We are on October';
}else{
    echo "We are on {$month}";
};

echo '<br>';

$currentMinute = date('i');
if ($currentMinute < 10){
    echo 'The current minute is less than 10';
} if ($currentMinute > 40){
    echo 'The current minute is more than 40';
} else {
    echo 'does not meet any conditions';
};

echo '<br>';
 

switch ($weekDay) {
   
    case 'Monday':;
        echo 'Today is Monday';
        break;
    
        case 'Tuesday':;
        echo 'Today is Tuesday';
        break;

        case 'Wednesday':;
        echo 'Today is Wednesday';
        break;

        case 'Thrusday':;
        echo 'Today is Thrusday';
        break;

        case 'Friday':;
        echo 'Today is Friday';
        break;

        case 'Saturday':;
        echo 'Today is Saturday';
        break;

        case 'Sunday':;
        echo 'Today is Sunday';
        break;

    default:
        echo 'Error.';
        break;
}


?>