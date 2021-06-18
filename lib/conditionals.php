<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
$date = new DateTime();
$day = $date->format('l');
if ($day == 'Monday') {
  echo 'We are on Monday';
}
echo '<br><br>';

// Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
$month = $date->format('F');
if ($month == 'October') {
  echo 'We are on October';
} else {
  echo $month;
}
echo '<br><br>';


// Create a double condition that evaluates:
$iMinutes = idate('i');
if ($iMinutes < 10) {
  echo 'the current minute is less than 10';
} elseif ($iMinutes > 15) {
  echo 'the current minute is more than 15';
} else {
  echo 'does not meet any conditions';
}
echo '<br><br>';

// Create a switch type control structure to display a different message depending on the current day of the week.
switch ($day) {
  case "Monday":
    echo "Today is Monday";
    break;

  case "Tuesday":
    echo "Today is Tuesday";
    break;

  case "Wednesday":
    echo "Today is Wednesday";
    break;

  case "Thursday":
    echo "Today is Thursday";
    break;

  case "Friday":
    echo "Today is Friday";
    break;

  default:
    echo "Weekend day";
}

require_once('../foot.php');
