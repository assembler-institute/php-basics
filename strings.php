<?php
    
    print('ITERATORS: <br><br>');
    print(" <hr>");

    $string = 'VARIABLE STRING'; 
    
    
    print('<strong>CONCAT STRING:</strong><br> ');
    $concatString = 'Original'. $string. "<br>"; 
    print($concatString);
    print("<br><br> <hr>");

    print('<strong>REPLACE STRING:</strong><br> ');
    $replacedString = str_replace("black", 'white', 'I love black label <br>');
    echo $replacedString;
    print("<br><br> <hr>");

    print('<strong>REPlACE STRING NOT TAKING INTO ACCOUNT CAPS:</strong><br> ');
    $replacedStringNotCS = str_ireplace("black", 'white', 'I love BLACK label');
    echo $replacedStringNotCS;
    print("<br><br> <hr>");

    print('<strong>ECHO SOMETHING 10 TIMES:</strong><br> ');
    echo str_repeat("GONNA DO THIS 10 TIMES! <br>", 10);
    print("<br><br> <hr>");

    print('<strong>LENGTH OF STRING:</strong><br> ');
    echo strlen('Welcome to TutorialKart<br>');
    print("<br><br> <hr>");

    print('<strong>LENGTH OF STRING:</strong><br> ');
    echo strlen('Welcome to TutorialKart<br>');
    print("<br><br> <hr>");

    print('<strong>LENGTH OF STRING:</strong><br> ');
    $mystring = 'I love this game';
    $findme   = 'this';
    $pos = strpos($mystring, $findme);
    print("<br><br> <hr>");

    print('<strong>FIND STRING POSITION:</strong><br> ');
    $mystring = 'I love this game';
    $findme   = 'this';
    $pos = strpos($mystring, $findme);
    print("<br><br> <hr>");

    print('<strong>FIND STRING POSITION:</strong><br> ');
    $mystring = 'I love this game';
    $findme   = 'this';
    $pos = strpos($mystring, $findme);
    echo "Position of the string is ${pos} <br>";
    print("<br><br> <hr>");

    print('<strong>FIRST LETTER CAPS:</strong><br> ');
    echo ucfirst("ive just uppercased this <br>");
    print("<br><br> <hr>");

    print('<strong>FIRST LETTER UNCAPS:</strong><br> ');
    echo lcfirst("Ive just undone it <br>");
    print("<br><br> <hr>");

    print('<strong>GET CHUNK OF STRING:</strong><br> ');
    echo substr("abcdefghijs", 0, 5);
    print("<br><br> <hr>");


    
   
    
?>