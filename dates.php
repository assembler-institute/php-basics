<?php
echo '<strong>results</strong><br><br>';
// instance DateTime

$date = new DateTime();

// different time formats

echo $date->format('Y-m-m');

echo "<br>";

date_default_timezone_set('Europe/Madrid');

echo $date->format('m/d/Y');

echo "<br>";

echo $date->format('m');

echo "<br>";

echo $date->format('i');

echo '<pre>
$date = new DateTime();

// different time formats

echo $date->format("Y-m-m");

echo "<br>";

date_default_timezone_set("Europe/Madrid");

echo $date->format("m/d/Y");

echo "<br>";

echo $date->format("m");

echo "<br>";

echo $date->format("i");
</pre>'

?>