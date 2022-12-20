<?php

$x = 3;
$y = 4;

/* PUNTO 1 */

function sum($x, $y) {
    return $x + $y;
}

echo sum($x,$y);

echo "<br><br>";

/* PUNTO 2 */

function mul($x, $y) {
    return $x * $y;
}

echo mul($x,$y);

echo "<br><br>";

/* PUNTO 3 */

function div($x, $y) {
    return $x / $y;
}

echo div($x,$y);

echo "<br><br>";

/* PUNTO 4 */

function operation($x, $y, $operation) {
    if($operation == "add") {
        return $x + $y;
    } else if ($operation == "multiply") {
        return$x * $y;
    }
}

echo operation(7, 6, "multiply");

?>