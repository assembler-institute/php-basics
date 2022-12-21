<?php
    
    print('EXERCISE A: <br><br>');
    print(" <hr>");
    print('<strong>STRING ARRAY:</strong> ');
    $array1 = array('string1','string2','string3','string4');
    print_r($array1);
    print("<br><br> <hr>");
    print('<strong>NORMAL ARRAY:</strong> ');
    $array2 = [1,2,3.5,4];
    print_r($array2);
    print("<br><br> <hr>");
    print('<strong>MULTIDIMENSIONAL ARRAY:</strong> ');
    $array3 = array('part 1' => [1,2,3,4], 2 =>  [1,1,1,1]);
    print_r($array3);
    print("<br><br> <hr>");
    print('<strong>NUMBER OF ELEMENTS IN ARRAY:</strong> ');
    echo count($array2);
    print("<br><br> <hr>");
    print('<strong>MERGED ARRAYS</strong> ');
    $newArrayMerge = array_merge($array1,$array2);
    print_r($newArrayMerge);
    print("<br><br> <hr>");
    print('<strong>COMBINED KAY-VALUE ARRAYS:</strong>');
    $newArrayCombine = array_combine($array1,$array2);
    print_r($newArrayCombine);
    print("<br><br> <hr>");
    print('<strong>LAST ELEMENT OF ARRAY:</strong> ');
    echo end($array1);
    print("<br><br> <hr>");
    print('<strong>PUSHED ELEMENTS TO ARRAY</strong> ');
    array_push($array1, 7,9,11);
    print_r($array1);
    print("<br><br> <hr>");


 
  
?>