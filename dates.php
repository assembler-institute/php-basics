<!-- Create a file called dates.php. This file as its name indicates will be used for work with dates. We will be using dates from classes in this case from DateTime class forgetting the use of old php functions.
Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
Get the current date in any format
Get the current day
Get the current month in numerical format (1-12)
Get the current minute with leading zeros (00 - 59) -->

<?php

$d = new DateTime();
echo $d->format('Y-m-d');

$day = new DateTime();
echo " "."Day: ". $day->format('d');

$month = new DateTime();
echo " "."Month: ". $month->format('m');

$minutes = new DateTime();
echo " "."Minutes: ". $minutes->format('i')
?>