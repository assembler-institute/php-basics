<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //giving format to dateTime
        //instance the date time class
        $test = new dateTime("12/13/2021");
        $dateTime = new DateTime("12/13/2021");
        echo "<h2>Instance the class dateTime</h2>";
        echo date_format($dateTime,"Y-m-d");
        echo "<h2>Get current date</h2>";
        echo date("d/m/y");
        echo "<h2>Get current day</h2>";
        echo date("d");
        echo "<h2>Get current month</h2>";
        echo date("m");
        echo "<h2>Get current minute</h2>";
        echo date("i");
       
    ?>
</body>
</html>