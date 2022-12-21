<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditionals</title>
</head>
<body>
    <h1>Iterators.php</h1>
    <?php
        $fecha = new DateTime();

        echo '<p><b>Today is Monday?</b></p>';
        if($fecha->format('w') === 1){
            echo "We are on Monday";
        }else{
            echo "Today is not Monday";
        }

        echo '<p><b>Are we in October?</b></p>';
        if($fecha->format('M') === 'Oct'){
            echo "We are in October";
        }else{
            echo "We are not October";
        }

        echo '<p><b>Is the current minute less than 10?</b></p>';
        if($fecha->format('i') < 10){
            echo "The current minute is less than 10";
        }else if($fecha->format('i') > 15){
            echo "The current minute is more than 15";
        }else{
            echo "Does not meet any conditions";
        }

        
        echo '<p><b>What weekday is today?</b></p>';
        switch($fecha->format('l')){
            case 'Sunday':
                echo "Today is Sunday";
                break;
        
            case 'Monday':
                echo "Today is Monday";  
                break;
        
            case 'Tuesday':
                echo "Today is Tuesday";     
                break;

            case 'Wenesday':
                echo "Today is Wenesday";     
                break;

            case 'Thursday':
                echo "Today is Thursday";     
                break;

            case 'Friday':
                echo "Today is Friday";     
                break;

            case 'Friday':
                echo "Today is Friday";     
                break;
        
            default: "There are no more days of the week";    
        }
    ?>
</body>
</html>