<?php
print "--- [ #Arreglo Indexado - String ] --- <br>";
$arrIndex = array('nombre', 'edad', 'pais', 'profesion');
echo var_dump($arrIndex[3]);
print '<br>';

print '<br>';
print "--- [ #Arreglo Indexado - Numbers ] --- <br>";
$arrIndex2 = array(3,2.2,6.99,8,25,99.99);
echo var_dump($arrIndex2[5]);


print '<br>';
print "<br>--- [ #Arreglo Multidimensionales  ] --- <br>";
$amigos = [['Alex', 20], ['Pepe',19],['Sofia',18,array('España')]];
// Acceder al arreglo pepe y su edad
echo $amigos[1][0] . ' --'  . $amigos[1][1].'años';
print '<br>';
// Acceder al arreglo sofi, su edad y el pais
echo $amigos[2][0] . ' --'  . $amigos[2][1].'años' . ' -- '. $amigos[2][2][0];

print '<br>';
print "<br>--- [ #Arreglo Multidimensionales Lenght] --- <br>";
echo count($amigos);


print '<br>';
print "<br>--- [ #Funtion to Merge two Arrays] --- <br>";
// Two Arrays in one sigle one
$mergeArr = array_merge($arrIndex, $arrIndex2);
// echo var_dump($mergeArr);
echo"<pre>";
    print_r($mergeArr); 
echo"</pre>";


print "<br>--- [ #Function return last element of Array] --- <br>";
// array_key_last()
// echo $lastEle = count($mergeArr)-1;
echo end($mergeArr);


print '<br>';
print "<br>--- [ #Function to add/Push Elements in an array] --- <br>";
$arrPush = ['Pepito',123, true];
array_push($arrPush, 'Hola Pepito Push');
print_r($arrPush);


print '<br>';
print "<br>--- [ Extra Content Commented] --- <br>";
/** 
 
print '<br>';
print "<br>--- [ #Arreglo Asociativo ] --- <br>";
$arrAsoci = array('nombre'=>'Lokesh', 'edad'=>25, 'pais'=>'España', 'profesion'=>'Developer');
echo $arrAsoci['edad'];
// echo $arrAsoci['nombre'] = 'Pepito';



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

**/

?>