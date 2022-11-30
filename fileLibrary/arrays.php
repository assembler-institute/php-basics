<?php
$stringArray=array("this","is", "an","string","array", "last");
print_r($stringArray);
echo nl2br("\nstring array\n\n");

$numArray=array(1,2,3.3,4.1,2.3);
print_r($numArray);
echo nl2br("\ndecimal and int array\n\n");


$multidimensionalArray=array(
    array("this","is", "an","string","array"),
    array(1,2,3.3,4.1,2.3)
);
print_r($multidimensionalArray);
echo nl2br("\nmultidimensional array\n\n");

function length($arry){
    echo nl2br("\n");
    echo count($arry);
    echo nl2br("\nEsta es la longitud del string array\n\n");
}
length($stringArray);

function mergeArry($arry1, $arry2){
    echo nl2br("\n");
    $mergedArry=array_merge($arry1,$arry2);
    print_r($mergedArry);
    echo nl2br("\nArray of nums and strings merged\n\n");
}
mergeArry($stringArray,$numArray);

function lastItemArry($arry1){
    echo nl2br("\n");
    $last=end($arry1);
    echo nl2br("\nThis the last item of the string array: $last \n\n");
}
lastItemArry($stringArray);

function addItemArry($arry1){
    echo nl2br("\n");
    array_push($arry1,"added item");
    print_r($arry1);
    echo nl2br("\nItem had already added\n\n");
}
addItemArry($stringArray);

?>