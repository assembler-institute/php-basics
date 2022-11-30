<html>

<?php

$date = new DateTime("now");

echo $date->format('Y-m-d\TH:i:sP');
echo $date->format("l, d-M-y H:i:s T");
echo $date->format("d");
echo $date->format("i");



?>

</html>