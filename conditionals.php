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

    // Var declarations
    $dateTime = new DateTime();
    

    // Header 
    echo "<H1> CONDITIONALS</H1>";

    // Vars used for examples
    echo "<H3> - Var used for examples</H3>";
    echo "\$dateTime = new DateTime(); <br>";

    // Check if Monday
    echo "<H3> - Check if Monday</H3>";
    echo "<pre>
            <code>
            if(\$dateTime->format('D') == 'Mon'){
                echo 'We are on Monday';
            }else{
                echo ' We are on '; echo \$dateTime->format('D');
            }
            </code>
        </pre>";
    
    echo "result of code => ";
    if($dateTime->format('D')=='Mon'){
        echo 'We are on Monday';
    }else{
        echo ' We are on '; echo "<b>".$dateTime->format('D')."</b>";
    }
    
    // Check if October
    echo "<H3> - Check if October</H3>";
    echo "<pre>
            <code>
            if(\$dateTime->format('M') == 'Oct'){
                echo 'We are on October';
            }else{
                echo ' We are on '; echo \$dateTime->format('M');
            }
            </code>
        </pre>";
    
    echo "result of code => ";
    if($dateTime->format('M')=='Mon'){
        echo 'We are on October';
    }else{
        echo ' We are on '; echo "<b>".$dateTime->format('M')."</b>";
    }

    // Check if minutes less than 10 / greater than 15 or else
    echo "<H3> - Check if minutes less than 10 / greater than 15 / else</H3>";
    echo "<pre>
            <code>
            if(\$dateTime->format('i') < 10){
                echo 'the current minute is less than 10';
            }elseif(\$dateTime->format('i') > 15){
                echo 'the current minute is more than 15';
            }else{
                echo 'the current minute is '; echo \$dateTime->format('i');
            }
            </code>
        </pre>";
    
    echo "result of code => ";
    if($dateTime->format('i') < 10){
        echo 'the current minute is less than <b>10</b>';
    }elseif($dateTime->format('i') > 15){
        echo 'the current minute is more than <b>15</b>';
    }else{
        echo 'the current minute is '; echo "<b>".$dateTime->format('i')."</b>";
    }

    ?>
    <br><br>
    <a href="/index.php"> <button>Home</button></a>
</body>
</html>
