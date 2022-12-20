<?php

#Simple condition

$day = "Monday";

echo "'day' variable is: $day <br><br>";

if ($day == "Monday") {
    echo "We are on Monday";
}

echo "<br><br><br>";

#Simple condition with Date

$month = date("F");

echo "Month is date('F'): $month<br><br>";

if ($month == "October"){
    echo "We are in October <br>";
} else {
    echo "We are in $month<br><br><br>";
}

#Double conditions

$minute = date("i");

echo "Minute is: $minute<br><br>";

if ($minute < 10){
    echo "the current minute is less than 10<br><br>";
} else if ($minute > 15) {
    echo "the current minute is more than 15<br><br>";
} else {
    echo "does not meet any conditions<br><br>";
}

#Switch statement

$dayOfTheWeek = date("l");

echo "The day of the week is: $dayOfTheWeek <br><br>";

switch ($dayOfTheWeek){
    case "Monday":
        echo "I eat potatoes<br><br>";
        break;
    case "Tuesday":
        echo "I play the guitar<br><br>";
        break;
    case "Wednesday":
        echo "I eat a lot of cheese :)<br><br>";
        break;
    case "Thursday":
        echo "My cat destroys the Christmas Tree<br><br>";
        break;
    case "Friday":
        echo "Hola Wilson<br><br>";
        break;
    case "Saturday":
        echo "My name is Jeff<br>";
        break;
    case "Sunday":
        echo "Paella para todos<br><br>";
        break;
}

?>