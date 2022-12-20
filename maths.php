<?php

#Absolute Function 

echo "This is the absolute function: <br><br>";

$absNum = -4.5;
echo "Number: $absNum<br>";

var_dump(abs($absNum));

echo "<br><br><br>";

#Rounded Function 

echo "This is the rounded function: <br><br>";

$roundedNum = 4.52343;
echo "Number to round: $roundedNum<br>";

var_dump(round($roundedNum));

echo "<br><br><br>";

#Highest Value Function
echo "This is the highest value function: <br><br>";

$array = array(4, 5, 12, 23, 2, 1);
echo "Array to do highest value: <br>";
print_r($array);
echo "<br><br>";

echo "Max function: ";
echo max($array);

echo "<br><br><br>";

echo "Min function: ";
echo min($array);

echo "<br><br><br>";

echo "This is the random value function: <br><br>";

$random = rand();
echo "$random";

?>