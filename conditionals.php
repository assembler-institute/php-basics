<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
</head>
<body>
    <p>Day of the week: <?php 
    $d = new DateTime();
    if ($d->format("w") == 1) {
        echo "We are on Monday";
    }
    ?></p>

    <p>Month: <?php 
    if ($d->format("m") == 10) {
        echo "We are on October";
    } else {
        echo "{$d->format('F')}";
    }
    ?></p>
    
    <p>Minute: <?php
    if ($d->format("i") < 10) {
        echo "The current minute is less than 10";
    } elseif ($d->format("i") > 15) {
        echo "The current minute is more than 15";
    } else {
        echo "Does not meet any conditions";
    }
    ?></p>

    <p>Day of the week (switch): <?php
    switch ($d->format("w")) {
        case 1:
            echo "Have a good week";
            break;
        case 2:
            echo "One less to go";
            break;
        case 3:
            echo "Half way there";
            break;
        case 4:
            echo "Almost there";
            break;
        case 5:
            echo "You made it!";
            break;
        case 6:
            echo "Enjoy the day";
            break;
        case 7:
            echo "Rest and Relax";
            break;
        default:
            echo "If this shows up you might be in Matrix";
    }
    ?></p>
</body>
</html>