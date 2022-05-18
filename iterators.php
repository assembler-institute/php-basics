<?php
echo "This is the value of foreach iterator: "; 
    $array = array(1, 3, 5, 4);
    foreach ($array as$valor){
        $valor = $valor*2;
        print_r($valor);
    };
echo "this is the value of the for iterator: ";
    for ($i = 0; $i <= 3; $i++) {
        print_r($array[$i]);
    };
echo "this is the value of the while iterator: ";
$i = 0;
    while ($i < 4){        
        print_r($array[$i]);
        $i++;
    };
    echo "this is the value of the do-while iterator: ";
    $i = 0;
do {
    print_r($array[$i]);
    $i++;
} while ($i < 4);
    ?>
