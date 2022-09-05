<?php
$date = date("w");

if ($date == 1 ) {
    echo "We are on Monday";
}

$dateMonth = new dateTime("NOW");


if ($dateMonth -> format("M") == "Oct"){
    echo "We are in October";
}else {
    print $dateMonth -> format("M")."<br>";
}

$minute = date("i");

if ($minute < 10 ){
    echo "The current minute is less than 10"."<br>";
}else if ($minute > 15 ){
    echo "the current minute is more than 15"."<br>";
}else{
    echo "does not meet any conditions"."<br>";
}

$dayWeek = date("w");

switch ($dayWeek) {
    case 0:
        echo "Monday"."<br>";
        break;
    case 1:
        echo "Tuesday"."<br>";
        break;
    case 2:
        echo "Wednesday"."<br>";
        break;
    case 3:
        echo "Thursday"."<br>";
        break;
}

?>