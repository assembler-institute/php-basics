<?php
define("CURRENT_DATE", date('Y-m-d'));
echo "the current date is ". CURRENT_DATE;

define("CURRENT_DAY", date('D'));
echo "<br>";

echo "the currenty day is ". CURRENT_DAY;
echo "<br>";

define("CURRENT_MONTH", date('M'));
echo "the currenty month is ". CURRENT_MONTH;

echo "<br>";

define("CURRENT_MINUTE", date('i'));
echo "the currenty minute is ". CURRENT_MINUTE;

$day="Mo";
$month="Oct";
$minute=CURRENT_MINUTE;

// $day==CURRENT_DAY? echo "We are on Tuesday": echo "false" ;
print_r(CURRENT_DAY);

echo "<br>";
if(CURRENT_DAY===$day){
    echo "We are on Tuesday";
}else{
    echo "Today is not Monday";
}
echo "<br>";

if(CURRENT_MONTH===$month){
    echo "We are in October";
}else{
    echo "Current month is ". CURRENT_MONTH;
}

echo "<br>";

if(CURRENT_MINUTE<10){
    echo "the current minute is less than 10";
}
elseif(CURRENT_MINUTE<15){
    echo "Current minute is more than 15 ";
}
else{
    echo "does not meet any conditions";
}
?>