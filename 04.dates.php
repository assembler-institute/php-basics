<?php
$date1 = new DateTime();
echo $date1->format("Y-m-d");

$date2 = new DateTime("2022-12-20");
echo $date2->format("Y-m-d"); // Outputs "2022-12-20"

$timestamp = strtotime("2022-12-20");
$date3 = new DateTime("@$timestamp");
echo $date3->format("Y-m-d"); // Outputs "2022-12-20"

echo date("d"); // Outputs the current day of the month as a 2-digit number (e.g. "01", "02", ..., "31")

echo $date3->format("d"); // Outputs the current day of the month as a 2-digit number (e.g. "01", "02", ..., "31")

echo date("m"); // Outputs the current month as a 2-digit number (e.g. "01", "02", ..., "12")

$date5 = new DateTime();
echo $date5->format("m"); // Outputs the current month as a 2-digit number (e.g. "01", "02", ..., "12")

echo date("i"); // Outputs the current minute as a 2-digit number with leading zeros (e.g. "00", "01", ..., "59")

$date6 = new DateTime();
echo $date6->format("i"); // Outputs the current minute as a 2-digit number with leading zeros (e.g. "00", "01", ..., "59")



?>