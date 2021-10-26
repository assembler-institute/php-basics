<?php
//Generate a snippet that makes use of for
//all the examples above are 1-10 numbers
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}


//Generate a snippet that makes use of foreach
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
}
// $array is now (2, 4, 6, 8)
unset($valor); 


//Generate a snippet that uses while
$i = 1;
while ($i <= 10) {
    echo $i++; 
}


//Generate a snippet that uses do while
$i = 0;
do {
    echo $i;
} while ($i > 0);



?>