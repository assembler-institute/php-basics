<?php
echo '<br>Generate an instruction that makes use of "echo"</br>';
$i = 0;
do {
    echo "<br>$i</br>";
    $i++;
} while ($i < 3);

print('<br>Generate an instruction that makes use of "print"</br>');
$i = 0;
do {
    print("<br>$i</br>");
    $i++;
} while ($i < 3);

echo '<br>Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential</br>';
$array1 = ['hola', 'dos'];
$i = 0;
do {
    array_push($array1, $i);
    print_r($array1);
    echo "<br>";
    $i++;
} while ($i < 3);
