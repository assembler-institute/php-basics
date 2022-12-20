<?php
#for

for($i = 3; $i <=9; $i++){
    echo $i;
}
echo "<br><br>";
#foreach

$a = array(1, 2, 3, 4);
foreach ($a as $k){
    echo "Valor actual de $k ";
}
echo "<br><br>";

#while
$l = 1;
while($l <=5){
    echo $l;
    $l++;
}
echo "<br><br>";

#do while
$k = 5;
do{
    echo $k;
    $k++;
}
while($k <= 10);
echo "<br><br>";

?>