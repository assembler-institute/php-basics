<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
$date = new DateTime();
echo $date->format('Y-m-d');
echo '<br><br>';

// Get the current date in any format
echo $date->format('d/m/y');
echo '<br><br>';

// Get the current day
echo $date->format('l');
echo '<br><br>';

// Get the current month in numerical format (1-12)
echo $date->format('n');
echo '<br><br>';

// Get the current minute with leading zeros (00 - 59)
echo $date->format('i');
echo '<br><br>';

require_once('../foot.php');
