<?php
    
    print('ITERATORS: <br><br>');
    print(" <hr>");

    print('<strong>ABSOLUTE VAR FUNCTION:</strong><br> ');
    $multip = 2 * 2;
    echo("{$multip} <br>");
    print("<br><br> <hr>");
    
    print('<strong>ABSOLUTE VAR FUNCTION:</strong><br> ');
    $varA = 4;
    $varB = 6;
    $varC = $varA + $varB;
    echo("{$varC} <br>");
    print("<br><br> <hr>");

    print('<strong>ABSOLUTE VAR FUNCTION:</strong><br> ');
    echo($varB / $varA);
    print("<br><br> <hr>");

    print('<strong>EQUAL TO:</strong><br> ');
    echo($varB % $varA);
    print("<br><br> <hr>");
    
    print('<strong>EQUAL TO:</strong><br> ');
    var_dump(1 == 2); 
    print("<br><br> <hr>");

    print('<strong>NOT:</strong><br> ');
    var_dump(1 != 2);
    print("<br><br> <hr>");

    print('<strong>Right is bigger:</strong><br> ');
    var_dump(1 < 2);

    print('<strong>Left is bigger:</strong><br> ');
    var_dump(1 > 2);
    print("<br><br> <hr>");

    print('<strong>Right is bigger or equal to left:</strong><br> ');
    var_dump(1 <= 2);
    print("<br><br> <hr>");

    print('<strong>left is smaller or equal to left:</strong><br> ');
    var_dump(1 >= 2);
    print("<br><br> <hr>");


    
    $var1 = 3;
    $var2 = 4;
    $var3 = 5;
    print('<strong>AND OPERATOR:</strong><br> ');
    if ($var1 && $var2 < 5) {
        echo('They are both smaller than 5 <br>');
    }
    print("<br><br> <hr>");

    print('<strong>AND OPERATOR:</strong><br> ');
    if ($var1 And $var2 < 5) {
        echo('They are both smaller than 5 <br>');
    }
    print("<br><br> <hr>");

    print('<strong>OR OPERATOR:</strong><br> ');
    if ($var1 || $var2 < 4) {
        echo('One is smaller than 4 <br>');
    }
    print("<br><br> <hr>");

    print('<strong>OR OPERATOR:</strong><br> ');
    if ($var1 Or $var2 < 4) {
        echo('One is smaller than 4 <br>');
    }
    print("<br><br> <hr>");
    
    print('<strong>NOT:</strong><br> ');
    if ($var1 != 4) {
        echo("${var1} is not 4 <br>");
    }
    print("<br><br> <hr>");

    print('<strong>XOR IS WHEN ONLY ONE OF THE OR VARS IS TRUE. IF BOTH TRUE TURNS FALSE BOOL</strong><br> ');
    if ($var1 xor $var2 < 4) {
        echo('One var is smaller than 4 <br>');
    }








?>