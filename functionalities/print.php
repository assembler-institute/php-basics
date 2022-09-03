<?php
#Las comillas dobles nos permiten imprimir las variables dentro de esas comillas, las simples NO.
//Print solo imprime un resultado 
echo "--- [ #Echo ] --- <br>";
$nombre='Lokesh';
// Acepta más de un resultado (a través de coma)
echo "Hola PHP, soy ","<strong>Lokesh Pereiro</strong>";

print '<br>';
print "<br>--- [ #Print ] --- <br>";
print "Hola, $nombre";

echo '<br>';
echo "<br>--- [ #Var_dump ] --- <br>";
$array1 = [1,2,3,4,5];
#El var_dump nos da la info del array (o cualquier tipo de dato) de manera más detallada
var_dump($array1);
echo '<br>';

print "<br>--- [ #Print_r ] --- <br>";
$array2 = ['aa','bb','cc','dd','ee'];
#El print_r nos da la info de los datos de manera que resulte fácil leerlo
print_r($array2);
?>