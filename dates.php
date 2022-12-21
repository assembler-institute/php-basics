<?php

echo "<h3>Instance the DateTime!</3>";

echo '<pre>$date = new DateTime()</pre>';
$date = new DateTime();
echo "<br>";

echo "<h3>get the current day in any format</3>";
echo "<br>";

echo $date->format('d-m-Y');

echo "<h3>get the current day</3>";
echo "<br>";

echo $date->format('Y-m-d');

echo "<h3>Get the current month in numerical format (1-12)</3>";
echo "<br>";

echo $date->format('m');

echo "<h3>Get the current minute with leading zeros (00 - 59)</3>";
echo "<br>";

echo $date->format('i');


?>
