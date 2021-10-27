<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates PHP</title>
</head>

<body>
    <div>
        <h2>Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day</h2>
        <p>
            <?php
            $dt = new DateTime();
            echo $dt->format('Y-m-d');
            ?></p>
    </div>
    <div>
        <h2>Get the current date in any format</h2>
        <p><?php
            $dt = new DateTime();
            echo $dt->format('Y-m-d H:i:s');
            ?></p>
    </div>
    <div>
        <h2>Get the current day</h2>
        <p><?php
            $dt = new DateTime();
            echo $dt->format('Y-m-d');
            ?></p>
    </div>
    <div>
        <h2>Get the current month in numerical format (1-12)</h2>
        <p><?php
            $dt = new DateTime();
            echo $dt->format('m');
            ?></p>
    </div>
    <div>
        <h2>Get the current minute with leading zeros (00 - 59)</h2>
        <p><?php
            $dt = new DateTime();
            echo $dt->format('s');
            ?></p>
    </div>



</body>

</html>