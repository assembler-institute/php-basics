<?php
echo "absolute value of -5: ";
$num = abs(-5);
echo "$num";
echo "<br>";

$rounded = round(6.5);
echo "6.5 rounded is: ";
echo "$rounded";
echo "<br>";

$maxNum = max(2, 3, 4, 5);
echo "the max number between 2, 3, 4, and 5 is: ";
echo $maxNum;
echo "<br>";

$minNum = min(2, 3, 4, 5);
echo "the min number between 2, 3, 4, and 5 is: ";
echo $minNum;
echo "<br>";

echo "random number between 1 and 10: ";
echo rand(1, 10);
echo "<br>";
?>