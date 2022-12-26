<?php

$currentDate = new DateTime();
if(date(format: "D") == "Mon"){
    echo "we are in monday";
    echo "<br>";
}

if(date(format: "M") == "Oct"){
    echo "we are in October";
    echo "<br>";
} else {
    echo date(format: "F");
    echo "<br>";
}

if(date(format: "i") < 10){
    echo "the current minute is less than 10";
    echo "<br>";
} else if (date(format: "i") > 15){
    echo "the current minute is more than 15";
    echo "<br>";
} else {
    echo "does not meet any condition";
    echo "<br>";
}

$switchDate = date(format: "N");
switch ($switchDate){
    case 1:
        echo "Hey! It's Monday";
        echo "<br>";
        break;
    case 2:
        echo "Hey! It's Tuesday";
        echo "<br>";
        break;
    case 3:
        echo "Hey! It's Wednesday";
        echo "<br>";
        break;
    case 4:
        echo "Hey! It's Thursday";
        echo "<br>";
        break;
    case 5:
        echo "Hey! It's Friday";
        echo "<br>";
        break;
    case 6:
        echo "Hey! It's Saturday";
        echo "<br>";
        break;
    case 7:
        echo "Hey! It's Sunday";
        echo "<br>";
        break;

}
?>