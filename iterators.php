<?php
for ($i = 0; $i <9; $i++) {
    $solarSystem = ["Sun", "Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];
    if ($i == 0) {
        echo "<h2>$solarSystem[$i]</h2><ol>";
    } else if ($i == 8) {
        echo " <li>$solarSystem[$i]</li></ol>";
        
    } else {
        echo " <li>$solarSystem[$i]</li>";
    }
}

echo "<hr>";

$a = [1, 2, 3, 4, 5, 6, 7, 8, 4, 9];
$aTimes2 = [];
foreach ($a as $n) {
    array_push($aTimes2, $n*2);
}
echo "<pre>";
print_r ($a);
print_r ($aTimes2);
echo "</pre>";

echo "<hr>";

$i = 0;
while ($i < 1) {
    echo "- <q>What's tatoes, precious? Tell us!</q> <br><br>";
    $i++;
}
do {
    echo "- <q>Po-ta-toes! Boil'em, mash'em, stick'em in a stew - even you couldn't say no to that!</q>";
} while ($i < 0);
?>
