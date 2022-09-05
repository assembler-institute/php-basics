<?php
print "<br>-------- [ htmlspecialchars() ] --------</br>";
// Nos permite convertir carateres especiales en 'entidades html'
$texto = '<>,&""';
$texto2 = '<b>Hola PHP</b>';
echo htmlspecialchars($texto).'<br>'; //R: &lt;&gt;,&amp;&quot;&quot;

// Con esto evitamos que el usuario inyecte otro código o el script. 
echo htmlspecialchars($texto2); //R: <br>&lt;b&gt;Hola PHP&lt;/b&gt;


print '<br>';
print "<br>-------- [ trim() ] --------</br>";
#Nos permite eliminar todos los espacios blancos al principio y al final de una cadena de texto
$string = ' Hola Pueblo  ';
$string2 = 'Hola Pueblo';
// echo $string;
echo trim($string);

print '<br>';
print "<br>-------- [ strlen() ] --------</br>";
echo strlen(trim($string));

print '<br>';
print "<br>-------- [ substr() ] --------</br>";
echo substr($string2,0,2); //R: Ho
#Devuelve los caracteres de entre la posicion 0 y 2, el resto se corta

print '<br>';
print "<br>-------- [ strtoupper() & strtolower] --------</br>";

print '<br>';
print "<br>-------- [ strpos() ] --------</br>";
?>