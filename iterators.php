<?php

print 'Loop For<br>';

for($i = 0; $i < 10; $i++){
    print $i.' ';
}

print '<br>Loop forEach<br>';

$forEach = array(1, 2, 3, 4);
forEach($forEach as $num){
    print_r($num.' ');
}

print '<br>Loop While<br>';

$while = 1;
while($while <= 4){
    print $while.' ';

    $while++;
}

print '<br>Loop Do While<br>';

$doWhile = 1;

do{
    print_r($doWhile);

    $doWhile++;
}while($doWhile <= 0);

?>