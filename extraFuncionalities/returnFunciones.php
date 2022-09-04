<?php
#El return de las funciones nos permite devolver un valor dentro de una funcion hacia fuera
#Muchas veces lo que quremos es obtener el resultado y guardar en la función y no mostrar a la pantalla
#Nos permiten evitar hacer echo dentro de la función

function sumar ($a, $b){
    $resultado = $a + $b;
    return $resultado;
    /*
    - Solo se puede retornar un valor
    - Tampoco se puede escribir codigo debajo del return, pues, no se te ejecuta
    */
}
// Ahora el resultado esta en la variable $resultado fuera de la funcion sumar();
echo $resultado = sumar(10,5). '<br>';


function saludar($nombre){
    return 'Hola: '. $nombre;
}
echo saludar('<b>Lokesh Pereiro</b>'); 





print '<br>';
print "<br>-------- [ Cálculo Área Triangulo ] --------</br>";
#De esta manera tenemos una función que sól se decia a calcular Area (del triangulo);

function calcularAreaTri($base, $altura){
    $area = ($base * $altura) / 2;
    return $area;
}
// echo 'El trinágulo tiene un área de '. calcularAreaTri(10,5). ' metros cuadrados';

// Podemos almacenar ese resultado en una variable para que reutilizarlo.
$resultadoAreaTri = calcularAreaTri(10,5);
echo 'El trinágulo tiene un área de '. $resultadoAreaTri. 'm²';
?>