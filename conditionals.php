<html>

<?php

$date = new DateTime("now");

$day = $date->format("l");
$month = $date->format("M");
$minute = $date->format("i");

if ($day === "Monday") echo "We are on Monday";
if ($month === "Oct") {
    echo "We are on October";
} else {
    echo "We are on $month";
}
if ($minute < 10) {
    echo "the current minute is less than 10";
} elseif ($minute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}

switch ($day) {
    case "Monday":
        echo "YEah";
        break;
    case "Tuesday":
        echo "Halloween";
        break;
    case "Wednesday":
        echo "In the middle";
        break;
    case "Thursday":
        echo "Nope";
        break;
    case "Friday":
        echo "Party!";
        break;
    case "Saturday":
        echo "Nap";
        break;
    case "Sunday":
        echo "Bored";
        break;
}

?>

</html>