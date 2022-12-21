<?php

# FOR
for($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo "<br><br>";

# FOREACH EX.1
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value;
}
echo "<br><br>";

# FOREACH EX.2
foreach (array(2, 4, 6, 8) as &$values) {
    $values = $values * 2;
    echo $values;
}
echo "<br><br>";

# WHILE
$x = 0;
while($x < 10) {
    echo $x;
    $x++;
}
echo "<br><br>";

# DO WHILE
$j = 2;
do{
    echo $j;
    $j++;
}
while($j <= 5);
echo "<br><br>";

?>