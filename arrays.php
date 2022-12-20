<?php
    echo "<h1>Arrays</h1>";

    $arr1 = array("tomato", "potato", "carrot");

    echo "<p>First array: ", var_dump($arr1),"</p>";

    $arr2 = array(10, 2.5 , 7, 200, 3.2);

    echo "<p>Second array: ", var_dump($arr2),"</p>";

    #multidimensional array
    $arrMult = array("user" => array("david", "moina"), "occupation" => array("student", "employee"));

    echo "<p>Multidimensional array: ", var_dump($arrMult),"</p>";

    #length of an array
    echo "<p>Length of second array is ", count($arr2),"</p>";

    #array combination
    $arrComb = array_merge($arr1, $arr2);
    echo "<p>The combination of the first and second array is", var_dump($arrComb), "</p>";

    #last element of an array
    echo "<p>The last element of the first array is: ", end($arr1),"</p>";

    # add a new element to the array
    array_push($arr1, "banana");

    echo "<p>Now I added banana to the first array and it is the result: ", var_dump($arr1),"</p>";
?>