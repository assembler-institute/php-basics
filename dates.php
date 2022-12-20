<?php

#DATETIME Y-M-D

$date = new DateTime;

echo $date->format ('Y-m-d');

echo '<br><br>';

#CURRENT DAY ANY FORMAT

echo $date->format ('Y-m-d H:i:s');
echo '<br><br>';

#CURRENT DAY

echo $date->format ('D-d');
echo '<br><br>';

#CURRENT MONTH

echo $date->format ('m');
echo '<br><br>';

#CURRENT MINUTE

echo $date->format ('i');


?>