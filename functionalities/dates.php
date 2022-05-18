<?php
//Instance the Date Time class
$date = new DateTime();
$formatDate = "Y-m-d";
$formatDay = "d";
$formatMonth = "m";
$formatMinute = "i";
echo $date -> format($formatDate).nl2br("\n");
echo $date -> format($formatDay).nl2br("\n");
echo $date -> format($formatMonth).nl2br("\n");
echo $date -> format($formatMinute).nl2br("\n");
?>