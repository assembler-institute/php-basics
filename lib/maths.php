<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Define a variable whose value is the result of the function that returns an absolute value.
$value = abs(-6.7);
echo $value;
echo '<br><br>';

// Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
echo (round(0.60));
echo (round(0.49));
echo '<br><br>';

// Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
$maxValue = max(0, 150, 30, 20, -8, -200);
echo $maxValue;
echo '<br><br>';

// Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
$minValue = min(0, 150, 30, 20, -8, -200);
echo $minValue;
echo '<br><br>';

// Define a variable whose value is the result of the function that returns a random number
$randValue = rand();
echo $randValue;

require_once('../foot.php');
