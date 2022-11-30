<?php
$currentDay = date("l");
if ($currentDay == "Monday") {
    echo "We are on Monday";
}


$currentMonth = date("F");
if ($currentMonth == "October") {
    echo "We are in October";
}else {
    echo $currentMonth;
}
echo "<br/>";
$currentMinutes = date("i");
 if ($currentMinutes < 10) {
    echo "the current minute is less than 10";
 }elseif ($currentMinutes > 15) {
     echo "the current minute is more than 15";
 }else {
   echo "does not meet any conditions";
 }
