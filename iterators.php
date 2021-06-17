<?php
echo '<br>Generate a snippet that makes use of for</br>';
for ($i = 0; $i < 3; $i++) {
    echo "<br>$i</br>";
}

echo '<br>Generate a snippet that makes use of foreach</br>';
$exampleArray = ['one', 'two', 'three'];
foreach ($exampleArray as $number) {
    echo "<br>$number</br>";
}

echo '<br>Generate a snippet that makes use of while</br>';
$exampleArray = ['one', 'two', 'three'];
while (!empty($exampleArray)) {
    $lastElement = array_pop($exampleArray);
    echo "<br>$lastElement</br>";
}

echo '<br>Generate a snippet that makes use of do while</br>';
$exampleArray = ['one', 'two', 'three'];
do {
    $lastElement = array_pop($exampleArray);
    echo "<br>$lastElement</br>";
} while (!empty($exampleArray));
