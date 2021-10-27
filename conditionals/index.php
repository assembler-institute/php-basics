<?php

echo '<h1>Conditionals</h1>';

function init($date = null, $cases = []) {
  
  if ($date === null) $date = new DateTime();

  $day = $date->format('l');
  $month = $date->format('F');

  switch ([$day, $month]) {
    case $day === $cases[0]:
      # code...
      echo "We are on $cases[0]";
      break;
    case $month === $cases[1]:
      # code...
      echo "We are on $cases[1]";
      break;
  }
 
  return;
}

init(null, ['Monday', 'October']);
?>