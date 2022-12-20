<?php
    echo "<h1>Conditionals</h1>";

    #condition that evaluates whether the current day is Monday
    $day = date("l");

    if($day == "Monday") {
        echo "We are on Monday";
    }
    
    #condition that evaluates whether the current month is October
    $month = date("F");

    if($month == "October") {
        echo "We are in October <br>";
    } else {
        echo $month, "<br>";
    }

    #double condition
    $minute = date("i");

    if($minute < 10) {
        echo "<p>the current minute is less than 10</p>";
    } elseif ($minute > 15) {
        echo "<p>the current minute is more than 15</p>";
    } else {
        echo "<p>does not meet any conditions</p>";
    }

    #switch conditional
    switch($day) {
        case "Monday":
            echo "<p>Today is $day</p>";
            break;
        case "Tuesday":
            echo "<p>Today is $day</p>";
            break;
        case "Wednesday":
            echo "<p>Today is $day</p>";
            break;
        case "Thursday":
            echo "<p>Today is $day</p>";
            break;
        case "Friday":
            echo "<p>Today is $day</p>";
            break;
        case "Saturday":
            echo "<p>Today is $day</p>";
            break;
        case "Sunday":
            echo "<p>Today is $day</p>";
            break;
    }
?>