<?php
// "Y-m-d" date format
echo "<h4>DateTime ('Y-m-d' format)</h4>";

$date = new DateTime();
echo $date -> format('Y-m-d');

// Current date
echo "<p>Current date<p>";

echo date("Y.m.d");

// Current day
echo "<h4>Current day ('D-d' format)</h4>";

echo date("D.d");

// Current month
echo "<h4>Current month (numerical/n format)</h4>";

echo date("n");

// Current minute
echo "<h4>Current minute ('i' format)</h4>";

echo date("i");
?>