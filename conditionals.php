<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Conditionals</title>
</head>

<body>
    <h1>Conditionals</h1>
    <?php

    // Create a simple condition that evaluates whether the current day is Monday.
    // Only in the case that the condition is met, it shows a message of “We are on Monday”.
    echo "<h2>Is it Monday?</h2>";
    echo '<pre>if ($currentDay == "Monday") {
            echo "We are on Monday";
        } else {
            echo "We are NOT on Monday";
        }</pre>';

    $day = new DateTime('now');
    $currentDay = $day->format('l');

    echo "<strong>Result: </strong>";
    if ($currentDay == "Monday") {
        echo "“We are on Monday";
    } else {
        echo "We are NOT on Monday";
    }

    // Create a simple condition that evaluates whether the current month is October.
    //If the condition is met, it shows a message of the type "We are in October".
    //Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

    echo "<h2>Are we in October?</h2>";
    echo '<pre>if ($currentMonth == "October") {
            echo "We are in October";
        } else {
            echo "No, we are in $currentMonth";
        }</pre>';
    echo "<strong>Result: </strong>";
    $month = new DateTime('now');
    $currentMonth = $month->format('F');

    if ($currentMonth == "October") {
        echo "We are in October";
    } else {
        echo "No, we are in $currentMonth";
    }

    // Create a double condition that evaluates:
    // If the current minute is less than 10. Displays a message of type "the current minute is less than 10"
    echo "<h2>Double condition</h2>";
    echo '<pre>
        if ($currentMinute < 10) {
            echo "The current minute is less than 10";
        } elseif ($currentMinute > 15) {
            echo "The current minute is more than 15";
        } else {
            echo "Does not meet any conditions";
        }
            </pre>';

    echo "<strong>Result: </strong>";
    $minute = new DateTime('now');
    $currentMinute = $minute->format('i');
    if ($currentMinute < 10) {
        echo "The current minute is less than 10";
        // If the current minute is greater than 15, displays a message of the type "the current minute is more than 15".
    } elseif ($currentMinute > 15) {
        echo "The current minute is more than 15";
        // If you do not meet any of the two conditions above, displays a message of the type "does not meet any conditions”
    } else {
        echo "Does not meet any conditions";
    }

    //Create a switch type control structure to display a different message depending on the current day of the week.
    echo "<h2>Switch</h2>";
    echo '<pre>
        switch ($currentWeekday) {
            case "Monday":
                echo "Today is $currentWeekday and it\'s dedicated to the Moon";
                break;
            case "Tuesday":
                echo "Today is $currentWeekday and it\'s dedicated to Mars";
                break;
            case "Wednesday":
                echo "Today is $currentWeekday and it\'s dedicated to Mercury";
                break;
            case "Thursday":
                echo "Today is $currentWeekday and it\'s dedicated to Jupiter";
                break;
            case "Friday":
                echo "Today is $currentWeekday and it\'s dedicated to Venus";
                break;
            case "Saturday":
                echo "Today is $currentWeekday and it\'s dedicated to Saturn";
                break;
            case "Sunday":
                echo "Today is $currentWeekday and it\'s dedicated to the Sun";
        }
        </pre>';

    echo "<strong>Result: </strong>";
    $weekday = new DateTime('now');
    $currentWeekday = $weekday->format('l');

    switch ($currentWeekday) {
        case "Monday":
            echo "Today is $currentWeekday and it's dedicated to the Moon";
            break;
        case "Tuesday":
            echo "Today is $currentWeekday and it's dedicated to Mars";
            break;
        case "Wednesday":
            echo "Today is $currentWeekday and it's dedicated to Mercury";
            break;
        case "Thursday":
            echo "Today is $currentWeekday and it's dedicated to Jupiter";
            break;
        case "Friday":
            echo "Today is $currentWeekday and it's dedicated to Venus";
            break;
        case "Saturday":
            echo "Today is $currentWeekday and it's dedicated to Saturn";
            break;
        case "Sunday":
            echo "Today is $currentWeekday and it's dedicated to the Sun";
    }

    ?>
</body>

</html>