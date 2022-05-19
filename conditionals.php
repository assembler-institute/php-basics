<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h4>Are we on monday?</h4>
        <?php
        $currentDay = date("D");
        if ($currentDay == "Mon") {
            echo "We are on Monday";
        }
        ?>
    </div>
    <div>
        <h4>Are we on October?</h4>
        <?php
        $currentMonth = date("M");
        if ($currentMonth == "Oct") {
            echo "We are on October";
        } else {
            echo "We are on $currentMonth";
        }
        ?>
    </div>
    <div>
        <h4>Minutes?</h4>
        <?php
        $currentMinutes = date("i");
        if ($currentMinutes < 10) {
            echo "the current minute is less than 10";
        } else if ($currentMinutes > 15) {
            echo "the current minute is more than 15";
        } else {
            echo "does not meet any conditions";
        }
        ?>
    </div>
    <div>
        <h4>Day of the Week?</h4>
        <?php
        $currentMinutes = date("N");
        switch ($currentMinutes) {
            case 1:
                echo "It is Monday";
                break;
            case 2:
                echo "It is Tuesday";
                break;
            case 3:
                echo "It is Wednesday";
                break;
            case 4:
                echo "It is Thursday";
                break;
            case 5:
                echo "It is Friday";
                break;
            case 6:
                echo "It is Saturday";
                break;
            case 7:
                echo "It is Sunday";
                break;
        }
        ?>
    </div>
</body>

</html>