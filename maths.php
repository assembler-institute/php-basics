<?php

    print('ITERATORS: <br><br>');
    print(" <hr>");

    print('<strong>ABSOLUTE VAR FUNCTION:</strong><br> ');
    $absoluteVar = var_dump(abs(-4.2));
    echo $absoluteVar. '<br>';
    print("<br><br> <hr>");

    print('<strong>ROUNDING NUMBER:</strong><br> ');
    $roundedVar = var_dump(round(-4.2, 0));
    echo $roundedVar. '<br>';
    print("<br><br> <hr>");

    print('<strong>FINDING HIGHEST NUMBER:</strong><br> ');
    echo max(2, 3, 1, 6, 7). "<br>"; 
    print("<br><br> <hr>");

    print('<strong>FINDING LOWEST NUMBER:</strong><br> ');
    echo min(2, 3, 1, 6, 7). "<br>";
    print("<br><br> <hr>");

    print('<strong>GET RANDOME NUMBER:</strong><br> ');
    echo rand(1,100);
?>