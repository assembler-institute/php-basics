<?php

print "<h2>Dates</h2>";
$date = new DateTime();
echo "('Y-m-d') format - <b>",$date->format('Y-m-d'), "</b><br />";
echo "Current day - <b>", $date->format('d'), "</b> is <b>", $date->format('l'), "</b><br />";
echo "Current month - <b>", $date->format('m'), "</b> is <b>", $date->format('F'), "</b><br />";
echo "Current year - <b>", $date->format('Y'), "</b><br />";
echo "Current minute - <b>", $date->format('i'), "</b>";

?>