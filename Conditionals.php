<?php
    echo "<h1>Conditionals</h1>";
    $d = new DateTime();
    echo $d->format("l, m, i");
    $day = $d->format("l");
    $month = $d->format("m");
    $min = $d->format("i");
    $enteroMonth = intval($month);
    $intMinute = intval($min);
    

     if($day === "Tuesday"){
         echo "<br>We are in Tuesdat";
     }
     if( $enteroMonth === 10){
           echo "<br>We are in October";
       }
     if($intMinute < 10){
         echo "<br>the current minute is less than 10";
     }
     else if($intMinute > 15){
         echo "<br>the current minute is more than 15";
     }
     else{
         echo "<br>does not meet any conditions";
     }
    switch ($day) {
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case 2:
            echo "i es igual a 2";
            break;
    }
?>