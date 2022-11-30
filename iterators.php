<?php

echo "----FOR----";
echo "<br/>";

for($i = 1; $i<= 10; $i++){
    echo $i;
    
}

echo "<br/>";


echo "----FOR EACH----";
echo "<br/>";

$heroes = [
    ['Batman', 'Bruce Wayne'],
    ['Spiderman', 'Peter Parker'],
    ['Superman', 'Clark Kent']
];

foreach ($heroes as [$hero, $name]) {
    echo "$hero is $name <br/>";
}


echo "----WHILE----";
echo "<br/>";

$num = 1;
while ($num <= 10) {
    echo "$num <br/>";
    $num++;
}

echo "----DO WHILE----";
echo "<br/>";

$a = 10;
do {
    echo "$a,";
    $a--;
} while ($a >= 1);
?>