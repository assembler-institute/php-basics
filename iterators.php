<html>

<?php

$numbers = array(3, 8, 0, 9, 23, 12);

for ($i = 0, $size = count($numbers); $i < $size; $i++) {
    print $numbers[$i];
}

foreach ($numbers as &$valor) {
    $valor = $valor * 6;
}

unset($valor);

$i = 0;

while ($i < 20) {
    print $i++ * 2;
}

do {
    echo $i;
} while ($i < 20);

?>

</html>