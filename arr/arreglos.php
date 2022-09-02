<?php

print "--- [ #Arreglo Indexado ] --- <br>";
$arrIndex = array('nombre', 'edad', 'pais', 'profesion');
echo $arrIndex[3];


print '<br>';
print "<br>--- [ #Arreglo Asociativo ] --- <br>";
$arrAsoci = array('nombre'=>'Lokesh', 'edad'=>25, 'pais'=>'España', 'profesion'=>'Developer');
echo $arrAsoci['edad'];
// echo $arrAsoci['nombre'] = 'Pepito';


print '<br>';
print "<br>--- [ #Arreglo Multidimensionales  ] --- <br>";
$amigos = [['Alex', 20], ['Pepe',19],['Sofia',18,array('España')]];
// Acceder al arreglo pepe y su edad
echo $amigos[1][0] . ' --'  . $amigos[1][1].'años';
print '<br>';
// Acceder al arreglo sofi, su edad y el pais
echo $amigos[2][0] . ' --'  . $amigos[2][1].'años' . ' -- '. $amigos[2][2][0];

print '<br>';
print "<br>--- [ #Contar Elementos Arreglo  ] --- <br>";
$meses = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'];

// Cuantos elementos hay dentro del arreglo?
// echo count($meses);

// Ordenar los meses, ojo, primero hay que imprimir los meses en patalla
rsort($meses);
// Si queremos acceder al último mes (= [12-1]-->11)
$ulti_mes =  count($meses) -1;
// echo $meses[$ulti_mes];

// Recorrer los meses para poder ordenarlos
foreach($meses as $mes){
    echo '--*' . $mes . '<br>';
}


?>