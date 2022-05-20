<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    <!-- 
    Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
    Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
    Create a double condition that evaluates:
    If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
    Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
     -->
     <?php

        if (date('D') == "Mon")
        echo "We are on monday";

        echo '<br><br>';

        if (date('M') == "Oct"){
            echo "We are on October!!";
        }else{
            echo date('M');
        }
        
        echo '<br><br>';

        if(date('i') < 10){
            echo "the current minute is less than 10";
        }elseif (date('i') > 15) {
            echo "the current minute is more than 15";
        }else {
            echo "does not meet any conditions";
        }
        
        echo "<br>";
        echo "<br>";

        $dt = date('D');
        switch ($dt) {
            case "Mon":
                echo "Today is: $dt";
                break;
            case "Tue":
                echo "Today is: $dt";
                break;
            case "Wed":
                echo "Today is: $dt";
                break;
            case "Thu":
                echo "Today is: $dt";
                break;
            case "Fri":
                echo "Today is: $dt";
                break;
            case "Sat":
                echo "Today is: $dt";
                break;
            case "Sun":
                echo "Today is: $dt";
                break;
        }
     ?>
</body>
</html>