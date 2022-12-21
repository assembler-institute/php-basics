<?php

echo "<h3>Are we on Monday?</h3>";

if (date("w") == 1) {
    echo "Today is Monday <br>";
} else{
    echo "today isn´t Monday";
}
echo "<br><br>";

echo "<h3>conditional to check if the current month is October</h3>";

if (date("F") == "October") {
    echo "We are in October";
} else {
    echo date("F");
}
echo "<br><br>";

echo "<h3>doble condicional about current minute</h3>";


if(date("i") < 10 ) {
    echo "the current minute is less than 10";
} else if (date("i") > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

echo "<br><br>";
//podrias crear una variable para los dates (date("i"), date("F") y date("w")) rollo $min, $month y $day

echo "<h3>Daily message with switch</h3>";

$day = date("w");

switch($day) {
    case 1:
    echo "Today is Monday :(";
    break;

    case 2:
        echo "today is Tuesday :(";
        break;

        case 3:
            echo "today is Wednesday :|";
            break;

            case 4:
                echo "today is Thursday :|";
                break;

                case 5:
                    echo "today is Friday :)";
                    break;

                    case 6:
                        echo "today is Saturday :D";
                        break;

                        case 0:
                            echo "today is Sunday :)";
                            break;
}



?>