<?php
print "--- [ Operadores Aritméticos ] --- <br>";

/* 
+ Suma
- Resta
* Multi
/ Divi
% modulo(residuo)
*/

$numero = 10;
$numero2 = 20;
echo $numero+$numero2;
print"<br>";
echo $resul = $numero2 /= 2;

print '<br>';
print "<br>--- [ Operadores de Compración ] --- <br>";

/*
== igual en valor 
=== igual en valor y tipo de dato
!=, es valor es distinto a..
!== el valor y el tipo de dato es distion a..
>
<
>=
<=
*/

$comprarAlcohol = 18;
if($comprarAlcohol>=18){
    echo 'Tienes edad para comprarlo...';
} else{
    echo 'Lo siento, no te podemos venderlo';
}
$booln = false;
$booln1 = 'false';

if($booln != $booln1){
    // Se ejecuta
    echo 'Se ejecutó...';
} else{
    echo 'NO se ejecuto...';
}

print '<br>';
print "<br>--- [ Operadores Lógicos ] --- <br>";

/* Operadores 
$$ And
OR, || or
XOR 
! negacion
*/

$nombre = 'Pepe';
// Solo se tiene que cumplir una condición, si se cumple ambos.. no se ejecuta
if($comprarAlcohol>= 18 XOR $nombre == 'Pepe'){
    Echo 'Bienvenido...';
} else{
    echo 'No se ejecutó..';
}


print "<br>--- [ Operadores de Asignación ] --- <br>";

/* 
= igual o de asignacion
+= propio valor + algun valor de asignacion (Ex. $numero += 7 --> 17)
-= (Ex. $num3 -= 7 --> 10)
*= (Ex. $num4 *= 7 --> 140)
/= (Ex. $numero2 /= 2 --> 10)
*/

$num3=10;
$num4=20;
echo $num3 -= 7;
print '<br>';
echo $num4 *= 7;
print '<br>';
echo $numero2 /= 2;




print "<br>--- [ Operadores de Asignación+Concatenar String ] --- <br>";
// Con el .= tienes que nombre las variables iguales
$texto = 'String, más,';
$texto .= ' Otra cadena de Texto';
echo $texto;


/* Operadores Incremento/Decremento
++$x
$x++
--$y
$y--

*/
?>