<?php

// different iterators

echo "for loop <br>";

for($i = 0 ; $i < 5; $i++){
    echo $i."<br>";
}

$myArray = [1,2,3,4,5];

echo "<br><br>";
echo "foreach";
echo "<br>";

foreach($myArray as $num){
    $num = $num*2;
}

print_r($myArray);

echo "<br><br>";
echo "while loop";
echo "<br>";

$j = 0;

while($j < 5){
    echo $j;
    $j++;
}

echo "<br><br>";
echo "do while";
echo "<br>";

$k = 0;

do{
    echo $k;
    $k++;
} while($k < 5)

?>