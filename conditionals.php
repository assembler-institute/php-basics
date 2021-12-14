<?php
    $day = date("w");

    if ($day == 1){
        echo 'We are on monday'.'<br>';
    }

    $month = date("M");
    if ($month == "Oct"){
        echo 'We are in october'.'<br>';
    }
    else{
        echo $month."<br>";
    }

    $minute = date("i");

    if ($minute < 10){
        echo "the current minute is less than 10"."<br>";
    }
    else if ($minute > 15){
        echo "the current minute is more than 15"."<br>";
    }
    else{
        echo  "does not meet any conditions"."<br>";
    }

    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
    }
?>