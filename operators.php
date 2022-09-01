<?php
$a = 3;
echo $a + (1 - 3) * 3 / 2 * $a; // -6
echo "<br>";
echo $a % 5; // 3

echo "<hr>";

$b = 2;
var_dump($a == $b);  // bool(false)
var_dump($a != $b);  // bool(true)
echo $a > $b;   // 1
echo $a < $b;   // *Nothing is displayed when a false boolean is echoed.
var_dump($a <= ($b + 1));   // bool(true)
echo $a >= $b;   // 1

echo "<hr>";

$c = false;
$d = true;

if ($c && $d ) { 
    echo "Both true";
} else if (!$d) {
    echo "D is not true";
} else if ($c xor $d) {
    echo "One is true, not both."; // <-- First valid
} else if ($c || $d) {
    echo "Any is true"; // <-- Also valid, but code was broken.
}
?>