<?php
$date = new DateTime();
echo '<br>invoke the format method with the argument “Y-m-d” to show year-month-day</br>';
echo $date->format('Y-m-d');

echo '<br>Get the current date in any format</br>';
echo $date->format('Y-m-d H:i');

echo '<br>Get the current day</br>';
echo $date->format('d');

echo '<br>Get the current month in numerical format (1-12)</br>';
echo $date->format('m');

echo '<br>Get the current minute with leading zeros (00 - 59)</br>';
echo $date->format('i');
