<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals.php</title>
</head>
<body>
    <h1>Conditionals</h1>
    
    <?php
    
    $date = new DateTime('M');

    print "Simple condition 1 <br/>";
    if(date("D") == "Wed")
    echo "We are on Monday";
    echo "<br/><br/>";

    print "double condition <br/>";

    $minutes = date("i");

    if($minutes < 10) {
        echo "The current minute is less than 10";
    } elseif ($minutes > 15) {
        echo "The current minute is more than 15";
    } else {
        echo "Doesn't not meet any conditions";
    }

    echo "<br/><br/>";

   $weekDay = date("D");
    switch ($weekDay) {
        case "Mon":
            echo "weekDay is Monday";
            break;

        case "Tue":
            echo "weekDay is Tuesday";
            break;

        case "Wed":
            echo "weekDay is Wednesday";
            break;

        case "Thu":
            echo "weekDay is Wednesday";
            break;

        case "Fri":
            echo "weekDay is Wednesday";
            break;
        
        default:
            echo "every other day";

    
    }
    

    

    ?>


</body>
</html>