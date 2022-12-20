<?php
    
    print('EXERCISE A: <br><br>');

    print('<strong>NORMAL IF WITH DAY OF WEEK:</strong> ');
    if (date('w') == 1) {
        echo 'We are on Monday';}
    else {
        echo 'We are not on monday <br><br>';
    }
    print("<br><br> <hr>");

    print('<strong>NORMAL IF WITH MONTH:</strong> ');
    $varMonth = date('m');
    if ($varMonth == 10) {
        echo 'We are in October';}
    else {
        echo "Current month is ${varMonth} <br>";
    }
    print("<br><br> <hr>");

    print('<strong>MINUTE OF HOUR IF:</strong> ');
    if (date('i') < 10) {
        echo 'the current minute is less than 10';}
    else if (date('i') > 15) {
        echo "the current minute is more than 15 <br>";
    }
    else {
        echo 'does not meet any conditions';
    }
    print("<br><br> <hr>");
    
    print('<strong>SWITCH STATEMENT:</strong>');
    switch (date('w')) {
        case "1":
            echo "It is Monday";
            break;
        case "2":
            echo "It is Tuesday";
            break;
        case "3":
            echo "It is Wednesday";
            break;
        case "4":
            echo "It is Thursday";
            break;
        case "5":
            echo "It is Friday";
            break;
        case "6":
            echo "It is Saturday";
            break; 
        case "7":
            echo "It is Sunday";
            break;       
    }
    print("<br><br><hr>");


  
?>