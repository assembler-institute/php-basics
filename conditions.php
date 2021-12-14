<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Condition we are on Monday
        echo "<h1>Conditions</h1>";
        $weekday= "Monday";
        if($weekday=="Monday"){
            echo "<p>We are on Monday</p>";
        }
    //Condition october month
        $actualMonth=date("F");
        if($actualMonth=="October"){
            echo "<p>We are in October</p>";
        }else{
            echo "<p>We are in $actualMonth</p>";
        }
        
    //Double condition minutes
    $currentMinute = date("i");
    if($currentMinute<10){
        echo "<p>the current minute is less than 10</p>";
    }else if($currentMinute>15){
        echo "<p>the current minute is more than 15</p>";
    }else{
        echo "<p>does not meet any conditions</p>";
    }
    //switch depending day of the week
    $actualDay = date("l");
    switch ($actualDay){
        case "Monday":
             echo "$actualDay" ;
             break;
        case "Tuesday": 
            echo "$actualDay" ;
            break;
        case "Wednesday": 
            echo "$actualDay" ;
            break;
        case "Thursday": 
            echo "$actualDay" ;
            break;
        case "Friday": 
            echo "$actualDay" ;
            break;
        case "Saturday": 
            echo "$actualDay" ;
            break;
        case "Sunday": 
            echo "$actualDay";
            break;
    }
    ?>
</body>
</html>