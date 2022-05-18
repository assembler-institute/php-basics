<?php
    $isMonday = date("D");
    if ($isMonday == "Mon") {
        echo "We are on Monday";
    }

    $currentMonth = date("M");
    if ($currentMonth == "Oct") {
        echo "We are on October";
    } else {
        echo "No, we are on $currentMonth";
    }

    $currentMinutes = date("i");
    if ($currentMinutes < 10) {
        echo "The current minute is less than 10";
    } else if ($currentMinutes > 15) {
        echo "The current minute is more than 15";
    } else {
        echo "does not meet any conditions";
    }

    $currentWeekDay = date("N");
    switch ($currentWeekDay) {
        case 1:
            echo "It is Monday";
            break;
        case 2:
            echo "It is Tuesday";
            break;
        case 3:
            echo "It is Wednesday";
            break;
        case 4:
            echo "It is Thursday";
            break;
        case 5:
            echo "It is Friday";
            break;
        case 6:
            echo "It is Saturday";
            break;
        case 7:
            echo "It is Sunday";
            break;
    }
?>
