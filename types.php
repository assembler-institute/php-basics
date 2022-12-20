<?php
    
    print('TYPES: <br><br>');
    print(" <hr>");

    print('<strong>BOOLEAN:</strong><br> ');
    $boolean = True;
    echo $boolean. "<br>";

    print('<br><strong>INTEGER:</strong><br> ');
    $intNum = 5;
    echo $intNum. "<br>";

    print('<br><strong>FLOAT:</strong><br> ');
    $floatNum = 5.6;
    echo $floatNum. "<br>";

    print('<br><strong>STRING:</strong><br> ');
    $string = 'esto es un string';
    echo $string. "<br>";

    print('<br><strong>ARRAY:</strong><br> ');
    $arrayVar = [1,2,3,4,5];
    echo $arrayVar. "<br>";

    print('<br><strong>OBJECT:</strong><br> ');
    $objectVar = (object) [1,2,3,4,5];
    print_r($objectVar);
    print('<br>');

    print('<strong>NULL:</strong><br> ');
    $nullVar = NULL;
    echo $nullVar. "<br>";
?>