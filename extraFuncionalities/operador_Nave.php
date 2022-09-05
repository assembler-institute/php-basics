<?php
// $nombre = $_GET['nombre'] ?? 'Anonima';
// echo $nombre;

#Sirve para programar tus propios algoritmos de comparacion, expresiones
/*  1: el valor de la izquierda es mayor
    0: cuando son iguales
    -1: el valor de la derecha es mayor
*/
echo 10 <=> 9;
echo '<br>';

echo 10 <=> 10;
echo '<br>';

echo 10 <=> 12;
echo '<br>';
echo '<br>';

print '<hr>';

$arreglo = [3,45,2,1,-2]; 
sort($arreglo);
// Suponiendo que no hay la funcion sort() en php, podemos crear una funcion nosotros mismo para ordenarlos
// function compararF($a,$b){
//     if($a==$b){
//         return 0;
//     } elseif($a>$b){
//         return 1;
//     } else{
//         return -1;
//     }
// }
#Misma funcion en corto

function compararF($a,$b){
    return $a <=> $b;
}

// Ahora, el usort() nos permite ordenar nuestro arreglo por la función definida
usort($arreglo, 'compararF');
echo implode(' - ', $arreglo);
?>