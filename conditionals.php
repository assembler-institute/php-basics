<?php

$currnetDay = date('l');

if ($currnetDay == 'Monday') { //cehcking current date with date method
  echo 'We are on Monday';
}

$currentMonth = date('M');
$DateTime = new DateTime();

if ($currentMonth == 'October') { // checking current month using datetime object formated to month
  echo "We are in October";
} else {
  echo $DateTime->format('F');
}
echo '<br>';

if ($DateTime->format('i') < 10) { // checking current minute using datetime object formated to minutes 0-59
  echo 'the current minute is less than 10';
} elseif ($DateTime->format('i') > 15) {
  echo 'the current minute is more than 15';
} else {
  echo 'does not meet any conditions';
}
echo '<br>';
switch ($DateTime->format('l')) { // using switch sentance
  case 'Monday':
    echo 'OMG it is a long week to go';
    break;
  case 'Tuesday':
    echo 'a bit better, but I stil cannot see the weekend';
    break;
  case 'Wednesday':
    echo 'I think I can smeel the weekend is coming';
    break;
  case 'Thurday':
    echo 'Oh wow, it is almost weekend';
    break;
  case 'Friday':
    echo 'IT IS FRIDAY!!!';
    break;
  case 'Saturday':
    echo 'DONT TALK TO ME IT IS WEEKEND';
    break;
  case 'Sunday':
    echo 'Yup still weekend';
    break;
}