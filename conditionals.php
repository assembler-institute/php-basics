<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File conditionals.php</title>
</head>

<body>
<a href="http://127.0.0.1/php-basics" style="text-decoration: none;background-color:black;color:white;">⮜Go Back</a>
    <h1>library of functionalities php</h1>
    <h2>php conditionals</h2>

    <?php

    $day = date("l");

    if ($day == "Monday") {
        echo "We are on Monday";
    }
    print "<br>";


    $month = date("F");

    if ($month == "October") {
        echo "We are in October";
    } else {
        echo "We aren't in October. We are in " . $month;
    }
    print "<br>";


    $minute = date("i");

    if ($minute < 10) {
        echo "The current minute is less than 10";
    } else if ($minute > 15) {
        echo "The current minute is more than 15";
    } else {
        echo "Does not meet any conditions";
    }
    print "<br>";


    $switchDay = date("l");

    switch ($switchDay) {
        case "Monday":
            echo "Happy Monday";
            break;
        case "Tuesday":
            echo "Happy Tuesday";
            break;
        case "Wednesday":
            echo "Happy Wednesday";
            break;
        case "Thursday":
            echo "Happy Thursday";
            break;
        case "Friday":
            echo "Happy Friday";
            break;
        case "Saturday":
            echo "Happy Saturday";
            break;
        case "Sunday":
            echo "Happy Sunday";
            break;
    }

    ?>

</body>

</html>