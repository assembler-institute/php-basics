<?php
#FUNCTION
function addTwoNumbers($x, $y)
{
    return $x + $y;
}

echo " sum of 10 and 25 : " . addTwoNumbers(10, 25);
echo "<br>";
function addmulti($x, $y)
{
    return $x * $y;
}

echo " mult of 10 and 25 : " . addmulti(10, 25);
echo "<br>";
function addiv($x, $y)
{
    return $x / $y;
}

echo " div of 10 and 25 : " . addiv(10, 25);

echo "<br>";
function operation($x, $y, $operation){
    if ($operation == "add"){
        return $x + $y;
    } else if ($operation == "multiply"){
        return $x * $y;
    }
}
echo operation(10, 25, "add");
echo "<br";
echo operation(10, 25, "multiply");


?>