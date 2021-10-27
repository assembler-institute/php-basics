<?php

$array = ["hola", "como", "estas", "tu"];

for ($i = 0; $i < count($array); $i++) {
    echo "$array[$i] <br>";
}

foreach ($array as $key => $value) {
    echo "<h1>$value </h1>";
}

$i = 1;
while ($i <= 10) {
    echo $i++."<br>"; 
}

$a = 0;
do {
    echo $a;

} while ($a > 0);
