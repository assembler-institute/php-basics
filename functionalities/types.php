<?php
print "--- [ String ] --- <br>";
$nombre = 'Pepito';
echo var_dump($nombre);

print '<br>';
print "<br>--- [ Numero(integer) ] --- <br>";
$numero = 10;
echo var_dump($numero);

print '<br>';
print "<br>--- [ Numero(float) ] --- <br>";
$numero_decimal = 10.999;
echo var_dump($numero_decimal);

print '<br>';
print "<br>--- [ Boolean ] --- <br>";
$verdadero = true;
/* true = 1, false = 0 */
echo var_dump($verdadero);
echo gettype($verdadero);


print '<br>';
print "<br>--- [ NULL ] ---";
// Cuando una variables aun no está asignada (No es 'Undefined')
$apellido;
// echo var_dump($apellido);
echo gettype($apellido);

print '<br>';
print "<br>--- [ Array ] --- <br>";
// Puedes almacenar cuallquier tipo de datos..
// Sintaxis tradicional
$diasSemana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
// Sintaxis nueva
$arr = ['string letras',2,true, array('abc',$xzy),5];
echo $diasSemana[5]; /* Resultado: Sábado */
// Se puede modificar los elementos del arreglo simplemente recorriendo su posición y/o añadirlos al final según el index
// echo $diasSemana[0] = 'Lokesh';
// echo $diasSemana[0]; 
// echo $diasSemana[7] = 'Pereiro';

print '<br>';
print "<br>--- [ Object ] --- <br>";
class abc {
}

$date = new DateTime();
$string = new abc; 

var_dump($date);

print '<br>';
print "<br>--- [ Constantes ] --- <br>";
// Las constantes se definen en un método 'define(nombre, valor)'
//Son variables globales que podemos acceder a ella desde cualquier archivo
// Por lo tanto son únicas y no se puede reescribirlas. Se recomienda escribirlas en mayusculas.
define('NOMBRE', 'Lokesh');
define('PI', '3.14');
// echo M_PI;
// define('Nombre', 'Pepe');
echo NOMBRE .'<br>';
echo PI;


?>