<?php
//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$date = new DateTime();
echo $date->format('Y-m-d');


//Get the current date in any format
echo " Today is " . date("Y/m/d");

//Get the current day
echo " Today is " . date("Y/m/d");

//Get the current month in numerical format (1-12)
echo " the current month is" . date("m");

//Get the current minute with leading zeros (00 - 59)
echo " The time is " . date("h:i:sa");
?>