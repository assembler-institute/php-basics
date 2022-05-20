<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <!-- 
        Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
        Get the current date in any format
        Get the current day
        Get the current month in numerical format (1-12)
        Get the current minute with leading zeros (00 - 59)
     -->
    <?php
    $dt = date("d/m/y");
    echo $dt . "<br>";
    echo "Today is " . date("d") . "<br>";
    echo "Month is: " . intval(date("m")) . "<br>"; //intval to remove the zero
    echo "Today is " . date("l") . "<br>";
    echo "Time: " . date("h:i:s") . "<br>";
    echo "Minute: " . date("i");

    ?>
</body>
</html>