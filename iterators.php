<?php
echo "<h3>for loop</h3>";
for ($i = 0; $i <= 8; $i++){
    echo $i;
}

echo "<h3>for each</h3>";
$array = ["bread","milk","onions","eggs"];
foreach ($array as $valor) {
    print "$valor";
}

echo "<h3>While</h3>";

$num = 1;

while($num <= 5) {
    echo $num;
    $num++;
}

echo "<h3>Do while</h3>";

$numero = 1;

do{
    echo $numero;
    $numero++;
}
while($numero < 6);

?>