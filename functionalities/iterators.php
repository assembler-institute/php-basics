<?php
    //Bucle for
    echo nl2br("Bucle for:\n");
    for($i=0; $i < 5; $i++){
        echo nl2br($i." linea\n");
    }

    //Bucle forEach
    echo nl2br("\nBucle forEach\n");
    $array = array(1,2,3,4);
    foreach($array as &$index){
        $index *= $index;
        echo nl2br($index."\n");
    }

    //Bucle while
    echo nl2br("\nBucle while:\n");
    $i = 1;
    while($i < 5){
        echo nl2br("linea ".$i."\n");
        $i++;
    }

    //bucle do-while
    echo nl2br("\nBucle do-while:\n");
    $j = 1;
    do{
        echo nl2br("linea ".$j."\n");
        $j++;
    }while($j <= 5);
?>