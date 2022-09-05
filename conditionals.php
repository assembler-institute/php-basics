<?php

# WEEK CONDITION
    $findDay = date('w');
    if ($findDay == 1) echo 'We are on Monday';

    # MONTH CONDITION
    $findMonth = date('m');
    if ($findMonth == 10) echo 'We are in October';

    # DOUBLE CONDITION
    $forMinutes = date('i');
    if ($forMinutes <= 10) {
        echo "the current minute is less than 10, ";
    } else if ($forMinutes >= 15) {
        echo "the current minute is more than 15, ";
    } else {
        echo "does not meet any conditions, ";
    }
    echo "the current minutes are ".$forMinutes."<br><br>";

    # SWITCH
    switch ($findDay) {
        case 0:
            echo 'Hoy es domingo';
        break;

        case 1:
        echo 'Hoy es lunes';
        break;

        case 2:
        echo 'Hoy es martes';
        break;

        case 3:
        echo 'Hoy es miercoles';
        break;

        case 4:
        echo 'Hoy es jueves';
        break;

        case 5:
        echo 'Hoy es viernes y el cuerpo lo sabe';
        break;
        
        case 6:
        echo 'Hoy es sabado';
        break;
    }

?>