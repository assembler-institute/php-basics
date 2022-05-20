<?php

// Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$date = new DateTime();
echo $date->format('Y-m-d'). "<br>";


//Get the current date in any format
$currentDate = getdate();
print_r($currentDate);

//Get the current day
$currentDay = getdate()['mday'];
echo "<br>".$currentDay;

// Get the current month in numerical format (1-12)
$currentMonth = getdate()['mon'];
echo "<br>".$currentMonth;

//Get the current minute with leading zeros (00 - 59)
$currentMinute = getdate()['minutes'];
echo "<br>".$currentMinute;
