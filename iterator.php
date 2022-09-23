<?php

$students = array("Ivan" , "Miguel" , "Matias" , "Volha" , "Adria");
//Generate a snippet that makes use of for
for ($i=0; $i < count($students) ; $i++) { 
    echo $students[$i];
    echo "<br>";
}

echo "<br>";

//Generate a snippet that makes use of foreach
$shoes = array("Nike" , "Adidas" , "Puma");
foreach ($shoes as $values){
    echo $values;
    echo "<br>";
}


echo "<br>";
//Generate a snippet that uses while
$stock = 10;
while ($stock > 0) {
    echo "We have stock in yeezy $stock shoes left";
    echo "<br>";
    $stock--;
}

echo "<br>";
//Generate a snippet that uses do while
$counter = 5;
do {
    echo "you have $counter seconds left";
    echo "<br>";
    $counter--;
}
while ($counter > 0);