<?php
echo "<h4>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</h4>";
$date = new DateTime();
echo $date->format('Y-m-d');

echo "<h4>Get the current date in any format</h4>";
echo $date->format('d-m-Y H:i');

echo "<h4>Get the current day</h4>";
echo $date->format('d');

echo "<h4>Get the current month in numerical format (1-12)</h4>";
echo $date->format('m');

echo "<h4>Get the current minute with leading zeros (00 - 59)</h4>";
echo $date->format('i');