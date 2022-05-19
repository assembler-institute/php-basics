<?php

// Dates in PHP

// Instantiate dateTime class / create new date
$now = new DateTime();
echo $now->format('Y-m-d');  

echo '<br><br>';

// Current date, ATOM format
$today = new DateTime('Today');
echo $today->format('Y-m-d\TH:i:sP');

echo '<br><br>';

// Get the current day.
echo $today->format('l');
echo '<br>';
echo $today->format('D');

echo '<br><br>';

// Get numerical representation of month, with leading 0 for single-digit months and without.
echo $today->format('m');
echo '<br>';
echo $today->format('n');
echo '<br>';
// Then represented as text
echo $today->format('F'); // full month in text
echo '<br>';
echo $today->format('M');  // 3 letter text

echo '<br><br>';
// Get the current minute with leading zeros.
echo $now->format('i');



