<?php
$amigos = ['nombre'=> 'David','telefono'=>645522991,'pais'=>'Peru', 'edad'=>25];

print "<br>-------- [ extract() ] --------</br>";
#Nos permite extraer los elementos de arreglos asociativos como si fueran variables
extract($amigos);
echo $telefono;

print "<br>-------- [ array_pop() ] --------</br>";
$semana = ['Lunes','Martes','Miercoles', 'Jueves','Viernes','Sabado','Domingo'];
#Nos permite extraer un elemento del array (y guardarlo en una variable) y eliminarlo del dicho array

$ultimoDia = array_pop($semana);

foreach($semana as $dia){
    echo $dia.'<br>';
}
print '<hr>';
echo $ultimoDia;

print '<br>';
print "<br>-------- [ join() ] --------</br>";
#Recibe dos paramétros: El 1º puede ser cualquier cosa / 2º nuestro arreglo
#Nos permite evitar tener que ejecutar un ciclo para mostrar los resultados 
echo join(' - ', $semana);
// echo join(' <br> ', $semana);

print '<br>';
print "<br>-------- [ count() ] --------</br>";

print '<br>';
print "<br>-------- [ sort() & rsort() ] --------</br>";
sort($semana);
echo join(', ', $semana);

print '<br>';
print "<br>-------- [ array_reverse() ] --------</br>";
#Nos permite guardar nuestro arreglo al revés en una variable

$semanaReverse = array_reverse($semana);
echo join(' *',$semanaReverse);
?>