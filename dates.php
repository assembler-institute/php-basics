<?php 
header("Content-type: text/plain");
// Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$date = new DateTime();
$result = $date->format('Y-m-d');
echo $result."\n";

// Get the current date in any format
$date2 = new DateTime(); //Actual date
echo date_format($date2, 'j-M-Y')."\n";

// Get the current day
date_default_timezone_set('Europe/Paris');
$date3 = new DateTime();
echo date('l')."\n";

// Get the current month in numerical format (1-12)
echo date("m")."\n";

// Get the current minute with leading zeros (00 - 59)
echo date("i")."\n";