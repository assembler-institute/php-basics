<?php

$i = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

echo "<br><br>";

$array = array(1, 2, 3, 4);

foreach ($array as &$valor) {
     $valor = $valor * 2;
    echo "Valor de $valor<br>";
}

echo "<br><br>";

$y = 1;

while ($y <= 10) {
    echo $y;
    $y++;
}

echo "<br><br>";

$x = 0;

do {
    echo $x;
} while ($x > 0);


?>