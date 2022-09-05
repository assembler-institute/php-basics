<?php
# Hay que pasar al menos un parámetro
// echo date();
#Formato imposible de leer
// echo time();

print '--------------------< Date >--------------------<br>';
// Día 
echo date('d') .'<br>'; 
// Mes
echo date('m').'<br>'; 
// Año
echo date('Y').'<br>'; 
// Dia semana
echo date('l').'<br>';

print '--------------------< Mix All >--------------------<br>';
// Puedes poner barra inclinada o guión
echo '<b>Día Hoy</b> = '. date('d/m/Y').'<br>';



print '--------------------< Time >--------------------<br>';
// h minuscula es en el formato 12hora; H mayuscula formato 24h
echo date('h').'<br>';
echo date('i').'<br>';
echo date('s').'<br>';
echo date('a').'<br>';
print '--------------------< Mix All >--------------------<br>';
echo '<b>Hora Actual</b> = '. date('H:m:s:a').'<br>';


print '--------------------< Current Date & Time >--------------------<br>';
echo date('m/d/Y H:i:sa');
echo '<br><br>';


print '--------------------< My BirthDay in Date & Time >--------------------<br>';
// Primero va la hora, luego la fecha. Pero se imprimer al revés
$myBday = mktime(14,15,44,2,05,1997);
echo date('m/d/Y H:i:sa', $myBday);

?>