<?php
echo "<br/>";
function sum($a, $b){
    return $a + $b;
}
echo sum(3,9);
echo "<br/>";
function multiplication($a, $b){
    return $a * $b;
}
echo multiplication(7,4);
echo "<br/>";

function division($a, $b){
    return $a / $b;
}
echo division(5,9);
echo "<br/>";
function operation($num, $num2, $operator){
    if ($operator == "+") {
       return sum($num , $num2);
    }
    if ($operator == "x") {
        return multiplication($num, $num2);
    }
    if ($operator == "/") {
        return division($num, $num2);
    }
}
echo operation(4,6, "+");
