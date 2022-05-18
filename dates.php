<?php
// dates.

$dateTime = new DateTime(); // getting an instance of DateTime object
echo $dateTime->format('Y-m-d'); //formating the instance to year-month-day format

echo "<br>";

$currentDate = getdate();
echo "<pre>";
print_r($currentDate); // printing the current date as an array
echo "</pre>";

echo "<br>";

$today = date('l jS \of M'); // showing the day name, the date and the month
echo $today;
echo "<br>";

$currentMonth = date('m'); // showing month in numerical format
echo $currentMonth;
echo "<br>";

$currentMinute = date('i'); // showing mintues with leading zeros 0-59
echo $currentMinute;