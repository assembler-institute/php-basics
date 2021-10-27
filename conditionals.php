<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PHP</title>
</head>

<body>
    <div>
        <h2>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</h2>
        <p><?php
            $dt = new DateTime();
            if ($dt->format('w') == 1) {
                echo "We are on Monday";
            }
            ?>
        </p>
    </div>
    <div>
        <h2>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</h2>
        <p><?php
            $dt = new DateTime();
            if ($dt->format('M') == "Oct") {
                echo "We are in October";
            } else {
                echo $dt->format('M');
            }
            ?>
        </p>
    </div>
    <div>
        <h2>Create a double condition that evaluates:
            ● If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
        </h2>
        <p><?php
            $dt = new DateTime();
            if ($dt->format('s') < 10) {
                echo "The current minute is less than 10";
            } else if ($dt->format('s') > 15) {
                echo "The current minute is more than 15";
            } else {
                echo "Does not meet any conditions";
            }
            ?>
        </p>
    </div>
    <div>
        <h2> Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
        </h2>
        <p><?php
            $i = new DateTime();
            $i = $i->format('w');

            switch ($i) {
                case 1:
                    echo "We are on Monday";
                    break;
                case 2:
                    echo "We are on Tuesday";
                    break;
                case 3:
                    echo "We are on Wednesday";
                    break;
                case 4:
                    echo "We are on Thursday";
                    break;
                case 5:
                    echo "We are on Friday";
                    break;
                case 6:
                    echo "We are on Saturday";
                    break;
                case 7:
                    echo "We are on Sunday";
                    break;
            }
            ?>
        </p>
    </div>



</body>

</html>