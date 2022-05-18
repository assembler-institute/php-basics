<?php
for ($i=0; $i < 10; $i++) { 
    echo $i;
};

echo "<br/>";
$array = [10, 20, 30, 40];
foreach ($array as $key ) {
    echo $key;
};
echo "<br/>";
$a = 0;
while ($a <= 10) {
    echo $a;
    $a++;
};
echo "<br/>";
$resta = 10;
do {
    echo "number:$resta <br/>";
    $resta--;
} while ($resta >= 0);