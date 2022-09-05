<?php

    $date = new DateTime;
    echo $date->format("Y-m-d") . "<br><hr>"; // <-- Current date YYYY-MM-DD format
    echo $date->format("m-Y-d \T H:i:s") . "<br><hr>"; //<-- Different format w/ time
    echo $date->format("d") . "<br><hr>"; // <-- Today's day
    echo $date->format("m") . "<br><hr>"; // <-- Today's month
    echo $date->format("i") . "<br><hr>"; // <-- Current minutes
    
?>