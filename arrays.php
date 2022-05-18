<?php
    $strArr = array("one", "two", "three");
    print_r($strArr);

    $numArr = array(1, 1.5, 2, 2.5, 3, 3.5);
    print_r($numArr);

    $multiArr = array(1, array(array(2), 3));
    print_r($multiArr);

    print_r(count($strArr) . "\n");

    $keysArr = array(1, 2, 3);
    $valuesArr = array("one", "two", "three");
    print_r(array_combine($keysArr, $valuesArr));

    print_r(end($numArr) . "\n");

    array_push($strArr, "four");
    print_r($strArr);
?>

