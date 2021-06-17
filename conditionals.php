<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <h3>Create a simple condition that evaluates whether the current day is Monday.
        Only in the case that the condition is met, it shows a message of “We are on Monday”.</h3>
    <pre>
        if (date("l") == "Monday") {
            echo ("We are on Monday");
        } else {
            echo ("We are not on Monday");
        }
    </pre>
    <u>Result:</u>
    <i>
        <?php
        if (date("l") == "Monday") {
            echo ("We are on Monday");
        } else {
            echo ("We are not on Monday");
        }

        ?>
    </i>
    </p>
    <p>
    <h3>Create a simple condition that evaluates whether the current month is October.
        If the condition is met, it shows a message of the type "We are in October".
        Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
    </h3>
    <pre>
        $date = new DateTime();
        if ($date->format("F") == "October") {
            echo ("We are in October");
        } else {
            echo ("We are not in October, we are in ");
            echo ($date->format("F"));
        }
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $date = new DateTime();
        if ($date->format("F") == "October") {
            echo ("We are in October");
        } else {
            echo ("We are not in October, we are in ");
            echo ($date->format("F"));
        }

        ?>
    </i>
    </p>
    <p>
    <h3>Create a double condition that evaluates:
    </h3>
    - If the current minute is less than 10. Displays a message of type "the current minute is less than 10"
    <br>
    - If the current minute is greater than 15, displays a message of the type "the current minute is more than 15"
    <br>
    - If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”

    <pre>
        $date = new DateTime();
        if ($date->format("i") < 10) {
            echo ("the current minute is less than 10");
        } elseif ($date->format("i") > 15) {
            echo ("the current minute is more than 15");
        } else {
            echo ("does not meet any conditions");
        }
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $date = new DateTime();
        if ($date->format("i") < 10) {
            echo ("the current minute is less than 10");
        } elseif ($date->format("i") > 15) {
            echo ("the current minute is more than 15");
        } else {
            echo ("does not meet any conditions");
        }
        ?>
    </i>
    </p>
    <p>
    <h3>
        Create a switch type control structure to display a different message depending on the current day of the week.
        You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
    </h3>

    <pre>
        $date = new DateTime();
        if ($date->format("i") < 10) {
            echo ("the current minute is less than 10");
        } elseif ($date->format("i") > 15) {
            echo ("the current minute is more than 15");
        } else {
            echo ("does not meet any conditions");
        }
    </pre>
    <u>Result:</u>
    <i>
        <?php
        $day = date("l");
        switch ($day) {
            case 'Monday':
                echo ("Lalala monday");
                break;
            case 'Wednesday':
                echo ("Lalala Wednesday");
                break;
            default:
                echo ("Lalala default");
                break;
        }
        ?>
    </i>
    </p>



</body>

</html>