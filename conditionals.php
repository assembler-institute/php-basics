<?php

$date = date('d-m-y h:i:s');
$weekDay = date('l', strtotime($date));
$month = date("F", strtotime('m'));
$minute = date('i');

if ($weekDay === 'Monday') {
    echo 'We are on Monday';
}

echo '<br><br>';

if ($month === 'October') {
    echo 'We are in October';
} else {
    echo "We are in $month";
}

echo '<br><br>';

if ($minute < 10) {
    echo 'The current minute is less than 10';
} else if ($minute > 15) {
    echo 'The current minute is more than 15';
} else {
    echo 'Does not meet any conditions';
}

echo '<br><br>';

switch ($weekDay) {
    case 'Monday':
        echo "Today is Monday";
        break;
    case 'Tuesday':
        echo "Today is Tuesday";
        break;
    case 'Wednesday':
        echo "Today is Wednesday";
        break;
    case 'Thursday':
        echo "Today is Thursday";
        break;
}

?>