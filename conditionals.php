<!-- Create a file called conditionals.php
This file as its name indicates will be used for working with conditionals:
Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
Create a double condition that evaluates:
If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it. -->
<?php
$dateTime = new \DateTime(
    'now',
    new \DateTimeZone('Europe/Stockholm')
);
$day = $dateTime->format('N');
echo $day;

if ($day == 3){
    echo "We are on wednesday";
}
else {
    echo "Today is not wednesday";
};
$month = $dateTime->format('m');
echo $month;
if ($month == 3){
    echo "We are on march";
}
else {
    echo date(" F");
}

$minut = new DateTime();
$minutes = $minut->format('i');
if ($minutes <10){
    echo " The current minute is less than 10";
}
else if($minutes >15){
    echo " The current minute is more than 15";
}
else{
    echo " Does not meet any contitions";
};
?>