<?php
//Print solo imprime un resultado 
print "Hola mundo";
echo '<br><br>';

// Acepta más de un resultado (a través de coma)
echo "Hola PHP, soy ","<strong>Lokesh Pereiro</strong>";
echo '<br><br>';

$array1 = [1,2,3,4,5];
#El var_dump nos da la info del array (o cualquier tipo de dato) de manera más detallada
var_dump($array1);
echo '<br><br>';

$array2 = ['aa','bb','cc','dd','ee'];
#El print_r nos da la info de los datos de manera que resulte fácil leerlo
print_r($array2);
?>