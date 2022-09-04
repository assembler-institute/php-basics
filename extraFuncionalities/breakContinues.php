<?php
$paises = ['España', 'Portugal', 'Francia', 'Chile', 'Peru', 'Alemania', 'Mexico', 'Argentina', 'Colombia'];
sort($paises);
print_r($paises);

$num = [223,33,5,-1,0,500,123,-45];
// foreach($paises as $pais){
//     echo $pais . '<br>';
//     #Break (Parar el ciclo)
//     if($pais == 'Francia'){
//         break;
//     }
// }
foreach($paises as $pais){
    #Continue (Evitar un 'ele')
    if($pais == 'Chile'){
        continue;
    }
     echo $pais . '<br>';
}
echo '<br>';

?>