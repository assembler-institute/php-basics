<?php

//get ddate
$date = new DateTime();

// Display actual date
print_r($date);

echo '<br><br>';

// Display year month day
print $date->format('Y-m-d');

echo '<br><br>';

// Display day
print $date->format('d');

echo '<br><br>';

// Display month
print $date->format('m');

echo '<br><br>';

// Display minutes 0-59
print $date->format('i');