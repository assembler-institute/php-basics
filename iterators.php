<?php
$i = 0;
for($i = 0; $i < 4; $i++){
    echo "i in for is: ";
    print_r ($i);
    echo "<br>";
}

echo "<br>";

$array = array(1, 2, 3, 4);
echo "array before forEach: ";
print_r ($array);
echo "<br>";
foreach ($array as &$valor) {
    $valor++;
}
//unset($valor); 

echo "array after forEach: ";
print_r ($array);

echo "<br>", "<br>";

$j = 0;
while($j<10){
    echo "j in while is: $j";
    echo "<br>";
    $j++;
}

echo "<br>";

$k = 0;
do{
    echo "k in do while is: $k";
    echo "<br>";
    $k++;
}while($k < 10);

?>