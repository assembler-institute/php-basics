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
 if ($currentMinutes < 20) {
    echo "the current minute is less than 20";
 }elseif ($currentMinutes > 50) {
     echo "the current minute is more than 50";
 }else {
   echo "does not match any conditions";
 }
