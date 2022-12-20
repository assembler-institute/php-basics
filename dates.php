<?php
    echo "<h1>Dates</h1>";
    
    $dateVar = new DateTime();

    #date with format method
    echo $dateVar-> format("Y-m-d"), "<br>";

    #current date in any format
    echo "Current date: ", $dateVar->format('Y-m-d H:i:sP'), "<br>";

    #current day
    echo "Current day: ", date("l"), "<br>";

    #current month in numerical format
    echo "Month: ", date("m"), "<br>";

    #current minute with leading zeros
    echo "Current minute: ",date('i');

?>