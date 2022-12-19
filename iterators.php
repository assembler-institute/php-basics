<?php
$i = 1;
$x = 0;

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$array = array(1, 2, 3, 4);

foreach ($array as &$valor) {
    $valor = $valor * 2;
}

while ($i <= 10) {
    echo $i++;
}

do {
    echo $x;
} while ($x > 0);


?>