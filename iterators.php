<?php
echo ("<h1>Iterators</h1>");

# For loop example

$number = 0;
echo "for loop: ";
for ($i = 0; $i <= 5; $i++) {
    echo "$i";
}
echo"<hr>";

# Foreach loop example

echo "Foreach loop: <br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value<br>";
}

echo"<hr>";

# While loop example

echo "While loop: ";
$integer = 0;
while($integer <= 5){
    echo "$integer";
    $integer++;
}

echo"<hr>";

# Do while loop example

echo "Do while loop: <br>";
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>