<?php
    // Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
    $d = new DateTime();
    // Get the current date in any format
    echo $d->format('y-m-d'); echo "<p></p>";
    // Get the current day
    echo $d->format('d'); echo "<p></p>";
    // Get the current month in numerical format (1-12)
    echo $d->format('m'); echo "<p></p>";
    // Get the current minute with leading zeros (00 - 59)
    echo $d->format('i');

    ?>
