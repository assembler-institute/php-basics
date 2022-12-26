<?php


function sum($x, $y) {
    return $x + $y;
}
echo "2 + 3 = ";
echo sum(2, 3);
echo "<br>";

function multi($x, $y) {
    return $x * $y;
}
echo "2 * 3 = ";
echo multi(2, 3);
echo "<br>";

function div($x, $y) {
    return $x / $y;
}
echo "2 / 3 = ";
echo div(2, 3);
echo "<br>";

function chooseOp($y, $x, $operando) {
    if ($operando === "+") {
      return $y + $x;
    }else if ($operando === "-") {
        return $y - $x;
    }else if ($operando === "*") {
        return $y * $x;
    }else if ($operando === "/") {
        return $y / $x;
    }else if ($operando === "%") {
        return $y % $x;
    }else if ($operando === "**") {
        return $y ** $x;
    }
}
echo "2 ** 3 = ";
echo chooseOp(2, 3, "**");
echo "<br>";
?>