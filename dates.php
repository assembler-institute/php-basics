<?php
//Instance DateTime class and then invoke the format method with the argument “Y-m-d” to show year-month-day
    $datetime = new DateTime();
    echo $datetime->setDate(2022, 12, 20)
        ->setTime(12, 00)
        ->setTimezone(new DateTimeZone('America/New_York'))
        ->format("Y-m-d\\TH:i:sP");
echo "<br> <br>";

// date 
echo "Today is " . date("Y-m-d") . "<br>";

// day
echo "Today is " . date("l") . "<br>";

//month in numerical format (1-12)
echo "Today is " . date("m") . "<br>";

//current minute with leading zeros (00 - 59)
echo "Now is " . date("i") . "<br>";

?>




