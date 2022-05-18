<?php

$day = date('l');

echo $day;

if ($day == 'Monday') {
    echo "We are on Monday";
}

echo "<br/>";

$month = date('F');

if ($month == 'October') {
    echo "We are in Octobe";
} else {
    echo "We are in $month";
}

$minutes = date('i');

echo "<br/>";
if (intval($minutes) < 10) {
    echo "the current minute is less than 10";
} else if (intval($minutes) > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}


echo "<br/>";
$weekDay = date('N');

switch (intval($weekDay)) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
        echo 'Sabado';
        break;
    case 7:
        echo 'Domingo';
        break;
    default:
        echo "No es un dia valido";
        break;
}
