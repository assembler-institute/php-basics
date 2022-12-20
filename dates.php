<?php
    
    print('EXERCISE A: <br><br>');

    print('<strong>TIME SINCE 1970 FUNC:</strong> ');
    echo(time(). '<br>');
    print("<br><br> <hr>");

    print('<strong>ACTUAL TIME FUNC</strong> ');
    echo date('Y-m-d'). '<br>';
    print("<br><br> <hr>");

    print('<strong>ACTUAL TIME TO THE SEC FUNC</strong> ');
    echo date('Y-m-d H:i:s'). '<br>';
    print("<br><br> <hr>");

    print('<strong>ACTUAL MONTH</strong> ');
    echo date('m'). '/12<br>';
    print("<br><br> <hr>");

    print('<strong>ACTUAL SECOND</strong> ');
    echo date('s'). '- 59<br>';
    print("<br><br> <hr>");

    print('<strong>ACTUAL DAY OF THE WEEK</strong> ');
    echo date('w');
    print("<br><br> <hr>");
  
?>