<?php
require_once('../head.php');
echo '<h4 class="my-4">Here we only show results, go to code to understand it</h4>';

// Generate a snippet that makes use of for
for ($i = 0; $i < 5; $i++) {
  echo "The index is $i <br>";
}
echo '<br><br>';

// Generate a snippet that makes use of foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $key => $value) {
  echo "Key: $key, value: $value <br>";
}
echo '<br><br>';

// Generate a snippet that uses while
$x = 0;
while ($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo '<br><br>';

// Generate a snippet that uses do while
$x = 6;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

require_once('../foot.php');
