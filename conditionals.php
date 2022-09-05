<?php

    $date = new DateTime;
    if ($date->format( 'N' ) == 1) {
        echo "We are on Monday";
    } else {
        echo "We are not on Monday";
    }

    echo "<hr>";

    if ($date->format( 'm' ) == 10) {
        echo "We are in October";
    } else {
        echo "We are not in October";
    }

    echo "<hr>";

    if ($date->format( 'i' ) < 10) {
        echo "The current minute is less than 10";
    } else if ($date->format( 'i' ) > 15) {
        echo "The current minute is more than 15";
    } else {
        echo "Does not meet any conditions";
    }

    echo "<hr>";

    switch ($date->format( 'N' )) {
        case '1':
            echo "Today is a working day";
            break;

        case '2':
            echo "Today is a working day";
            break;

        case '3':
            echo "Today is a working day";
            break;

        case '4':
            echo "Today is a working day";
            break;

        case '5':
            echo "Today is a working day";
            break;

        case '6':
            echo "Today is not a working day";
            break;

        case '7':
            echo "Today is not a working day";
            break;
    }

?>