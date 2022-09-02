<?php

    $arr = ["text", "random"];
    $arrWhoNum = [1, 2, 6, 0, 5];
    $arrMulti  = ["multidimension", $arr, $arrWhoNum];

    echo count($arr); // 2;
    echo "<hr>";

    $arrMerge = array_merge($arr, $arrWhoNum);
    echo"<pre>";
    print_r($arrMerge); 
    echo"</pre>";
    echo "<hr>";

    echo end($arrWhoNum); // 5
    echo "<hr>";

    $arrAdd = $arrWhoNum;
    array_push($arrAdd, 9);
    echo"<pre>";
    print_r($arrWhoNum); // origin
    print_r($arrAdd); // 9 pushed
    echo"</pre>";
    
?>