<?php
echo "<br/>";
function sum($a, $b){
    return $a + $b;
}
echo sum(3,6);
echo "<br/>";
function multiplication($a, $b){
    return $a * $b;
}
echo multiplication(6,4);
echo "<br/>";

function division($a, $b){
    return $a / $b;
}
echo division(2,8);
echo "<br/>";
function operation($num, $num2, $operator){
    if ($operator == "add") {
       return sum($num , $num2);
    }
    if ($operator == "multiplication") {
        return multiplication($num, $num2);
    }
    if ($operator == "division") {
        return division($num, $num2);
    }
}
echo operation(4,6, "add");
