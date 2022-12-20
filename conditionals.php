<?php
print "<h2>Conditionals</h2>";
print "<h3>Simple Condition</h3>";
$l = "<br />";
$date = new DateTime();
if ($date->format('D') == 'Mon') {
  echo "We are on <b>Monday</b>", $l;
} else echo "We aren't on <b>Monday</b>", $l;

if ($date->format('m') == '10' or $date->format('M') == 'Oct') {
  echo "We are in <b>October</b>", $l;
} else {
  echo "We are in <b>", $date->format('F'), "</b>$l";
}

print "<h3>Double Condition</h3>";
if ($date->format('i') < 10) echo "The current minute is less than 10";
else if ($date->format('i') > 15) echo "The current minute is more than 15";
else echo "Does not meet any conditions";
echo $l, "<h3>Switch Statement</h3>";
switch ($date->format('D')) {
  case 'Mon':
  echo "We are on <b>Monday</b>";
    break;
  case 'Tue':
  echo "We are on <b>Tuesday</b>";
    break;
  case 'Wed':
  echo "We are on <b>Wednesday</b>";
    break;
  case 'Thu':
  echo "We are on <b>Thursday</b>";
    break;
  case 'Fri':
  echo "We are on <b>Friday</b>";
    break;
  case 'Sat':
  echo "We are on <b>Saturday</b>";
    break;
  case 'Sun':
  echo "We are on <b>Sunday</b>";
    break;
}

?>
