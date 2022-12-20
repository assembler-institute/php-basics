<?php

$day = "Monday";
$month = "December";

if($day == "Monday"){
    echo  "We are on Monday <br><br>";
}else echo "We are not on Monday <br><br>";

if($month == "October"){
    echo  "We are in October <br><br>";
}else echo "We are in " . date("F") . "<br><br>";

// Doble condition

$minute = 9;
if($minute < 10){
    echo "the current minute is less than 10 <br><br>";
}elseif($minute>15){
    echo "the current minute is more than 15";
}else echo "does not meet any conditions";

// Switch
$today = "friday";

switch($today){
    case 'Monday':
        echo "Let start the week <br><br>";
        break;

    case 'Wednesday':
        echo "The are just three days more to finish the week! <br><br>";
        break;

    case 'friday':
        echo "The last working day <br><br>";
        break;

    case 'Sunday':
        echo "Tomorrow we will start again <br><br>";
        break;

    default: echo "nothing to do";
}
 

?>