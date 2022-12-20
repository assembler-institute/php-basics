<?php
echo ("<h1>Dates</h1>");

# Date Time class

$dateClass = new DateTime();
print("Y-m-d format: ");
echo $dateClass->format("Y-m-d");

echo ("<hr>");

# Current date
print("Current date in any format: ");
echo $dateClass->format("y-M-l");

echo ("<hr>");

print("Current day: ");
echo $dateClass->format("l");

echo ("<hr>");

print("Current month in numerical: ");
echo $dateClass->format("m");

echo ("<hr>");

print("Current minute leading zeros: ");
echo $dateClass->format("00:i");


?>