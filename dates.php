<?php
// "Y-m-d" date format
echo "<p>DateTime ('Y-m-d' format)<p>";

$date = new DateTime();
echo $date -> format('Y-m-d');

// Current date
echo "<p>Current date<p>";

echo date("Y.m.d");

// Current day
echo "<p>Current day ('D-d' format)<p>";

echo date("D.d");

// Current month
echo "<p>Current month (numerical/n format)<p>";

echo date("n");

// Current minute
echo "<p>Current minute ('i' format)<p>";

echo date("i");
?>