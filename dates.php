<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dates.php</title>
</head>
<body>
    <h1>dates</h1>
    
    <?php
    print "Format method with argument 'Y-m-d':<br/>";
    $currentDate = date("Y-m-d");
    echo $currentDate;
    echo "<br/><br/>";

    print "Get the current date in any format:<br/>";
    $todayWithFormat = date("m-d-Y");
    echo $todayWithFormat;
    echo "<br/><br/>";

    print "current day:<br/>";
    $day = date("d");
    echo $day;
    echo "<br/><br/>";

    print "current month:<br/>";
    $month = date("m");
    echo $month;
    echo "<br/><br/>";

    print "current minutes:<br/>";
    $minutes = date("i");
    echo $minutes;
    echo "<br/><br/>";

    ?>


</body>
</html>