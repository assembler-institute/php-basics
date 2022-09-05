<?php

//for

for($alphabet = "A"; $alphabet != "AA"; $alphabet++) {
    echo $alphabet . " ";
} // This loop shows us the entire alphabet.

echo "<hr>";

$numeros = array (1,2,3,4);

foreach ($numeros as &$value)

    print "the number is: $value <br>";

$x=0;
while ($x < 10){
    print "the number is $x <br>";
    $x++;
}

echo "<hr>";

$y=10;
do{
    print "the number is $y <br>";
    $y--;
}
while($y > 0);


?>