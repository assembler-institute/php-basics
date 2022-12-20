<?php

$date = new DateTime();

echo $date->format('Y-m-m');

echo "<br>";

date_default_timezone_set('Europe/Madrid');

echo $date->format('m/d/Y');

echo "<br>";

echo $date->format('m');

echo "<br>";

echo $date->format('i');






?>