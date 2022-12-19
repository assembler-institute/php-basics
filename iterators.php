<?php

#for Loop

echo "- for Loop in PHP: <br><br>";

for($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br><br><br>";

#forEach Loop

echo "- foreach Loop in PHP: <br><br>";

$fruits = array("Apple", "Orange", "Banana", "Kiwi");

foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

echo "<br><br>";

#while Loop

echo "- while Loop in PHP: <br><br>";

$j = 0;

while ($j < 10) {
    echo $j;
    $j++;
}

echo "<br><br><br>";

#do while Loop

echo "- do while Loop in PHP: <br><br>";

$k = 0;

do {
    echo $k;
    $k++;
} while ($k < 10);

?>