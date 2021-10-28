<?php
    echo "<h1> Functions </h1>";
    $a=2;
    $b=3;
    $operator = $_GET['operator'];
    
function operations($operator,$a,$b){
switch($operator){
    case "s":
        return $a + $b;
    case "*":
        return $a * $b;
    case "/":
        return $a / $b;
    
}
};

echo operations($operator,$a,$b);
?>