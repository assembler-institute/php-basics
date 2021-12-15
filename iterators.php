<?php

for ($x = 0 ; $x <= 10 ; $x ++ ){
    print "the number is: $x <br>";
}

$array = array (1,2,3,4);

foreach ($array as &$value)

    print "the number is: $value <br>";

$x=0;
while ($x < 10){
    print "el numerito es $x <br>";
    $x++;
}


$z=10;
do{
    print "el numerito es $z <br>";
    $z--;
}
while($z > 0);

