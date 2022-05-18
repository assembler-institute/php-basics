<?php

echo("<h1>Conditionals on PHP</h1>");


$currentDay = date('d');

echo("<h2>Condition that evaluates whether the current day
is Monday.</h2>");
if ($currentDay == 'Monday'){
    echo ("<p>We are on Monday</p>");
} else {
    echo ("<p> Today is not Monday </p>");
}
echo ("<hr>");

echo("<h2>Condition that evaluates whether the current
month is October.</h2>");
// date('M) -> May
// date ('m') -> 05
// date ('n') -> 5

$currentMonth = date('M');
if ($currentMonth == "October"){
    echo("<p>We are on October</p>");
}else{
    echo("<p>We are on $currentMonth</p>");
}
echo ("<hr>");

echo("<h2>Double condition that evaluates the current minute</h2>");
// date('i) -> current minute
$currentMinute = date('i');

if ($currentMinute < 10){
    echo("<p>The current minute is less than 10</p>");
} else if ($currentMinute > 15){
    echo("<p>The current minute is more than 15</p>");
} else{
    echo("<p>Does not meet any conditions</p>");
}
echo ("<hr>");

echo("<h2>Switch type control structure to display current day of the week</h2>");

$weekDay = date('D');

switch ($weekDay){
    case "Mon":{
        echo("<p>Today is Monday</p>");
        break;
    }
    case "Tue":{
        echo("<p>Today is Tuesday</p>");
        break;
    }
    case "Wed":{
        echo("<p>Today is Wednesday</p>");
        break;
    }
    case "Thu":{
        echo("<p>Today is Thursday</p>");
        break;
    }
    case "Fri":{
        echo("<p>Today is Friday</p>");
        break;
    }
    case "Sat":{
        echo("<p>Today is Saturday</p>");
        break;
    }
    case "Sun":{
        echo("<p>Today is Sunday</p>");
        break;
    }
    
}


?>