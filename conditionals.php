<!-- Create a simple condition that evaluates whether the current day is Monday. 
Only in the case that the condition is met, it shows a message of “We are on Monday”. -->

<?php
$d = date("l");

if ($d === "Monday") {
  echo "We are on Monday!";
}
?>

<!-- Create a simple condition that evaluates whether the current month is October. 
If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime. -->

<?php
$t = date("F");
$d = date('F');

if ($t === "October") {
  echo "We are in October!";
} else {
  echo "We are in $d";
}
?>

<!-- Create a double condition that evaluates:
If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions” -->
</br>
</br>
<?php
$t = date("i");

if ($t < "10") {
  echo "The curent minute is less than 10";
} elseif ($t > "15") {
  echo "The current minute is more than 15";
} else {
  echo "Does not meet any conditions";
}
?>

<!-- Create a switch type control structure to display a different message depending on the current day of the week.
You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it. -->
</br>   
<?php
$d = date("l");

switch ($d) {
  case "Monday":
    echo "Today is Monday";
    break;
  case "Tuesday":
    echo "Today is Tuesday";
    break;
  case "Wednesday":
    echo "Today is Wednesday";
    break;
  default:
    echo "Todays is from Thursday to Sunday";
}
?>