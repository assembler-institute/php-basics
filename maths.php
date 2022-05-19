<?php


// Maths in PHP


// Return an absolute number
$absFromFloat = abs(-14);
echo $absFromFloat;

echo '<br><br>';

// Round to ceiling
$roundedUp = ceil(14.2);
echo $roundedUp;

echo '<br><br>';

// Return highest in an array, or of given values
$highest = max(23, 40, 6, 72, 2, 57, 12, 16, 29);
echo $highest;

echo '<br><br>';

// Return lowest in an array, or of given values
$lowest = min(23, 40, 6, 72, 2, 57, 12, 16, 29);
echo $lowest;

echo '<br><br>';

// Return an random integer. Add arguments for min, max
$randomInt = rand(1, 100);
echo $randomInt;
