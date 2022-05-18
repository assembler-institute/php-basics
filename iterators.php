<?php

$myFruitArray = ['banana', 'avocado', 'date', 'tomato', 'apple'];
$numbers = [1, 2, 3, 4];
$name = "sefi";

// Using foreach to iterate over an array

echo "<ol>";

foreach($myFruitArray as $fruit) {
  echo "<li>$fruit</li>";
};

echo "</ol>";

echo "<br>";

// Using for loop

for ($i = 1; $i <= 5; $i++) {
  echo "printing out value of var (i) - $i <br>";
}
echo "<br>";


//  Using while loop

$a = 1;

while ($a <= 10) {
  echo "printing value of var a - $a  <br>";
  $a++ ;
}
echo "<br>";

// using do while

$b = 1;

do {
  echo "printing out value of var b - $b <br>"; 
  $b++;
}   
while ($b <= 10);