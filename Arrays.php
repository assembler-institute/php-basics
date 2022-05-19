<?php
    echo "<h1>Arrays</h1>";

    $fruits = array("apple", "orange", "banana");
    $numbers = array (1,3.001,5,8.2,9.24,34);
    $array = array("hola", "como", "estas", array("muy","bien"));

    $arrayMerged = array_merge($fruits,$numbers);
    

    echo "<br>", count($fruits);
    print "<br>"; 
    var_dump($arrayMerged);
    echo "<br>", end($numbers);

    $arrayPushed = array_push($fruits,"strawberry", "cherry");

    echo "<br>", $arrayPushed;
    

?>