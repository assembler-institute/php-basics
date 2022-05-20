<?php

/* BOOLEAN */

/* $isComplete = true; 
if($isComplete){
    //do something
} else {
    //do something else
} */

/* INTEGER */

/* PHP_INT_MAX
PHP_INT_MIN
PHP_INT_SIZE

EXAMPLES*/

/* $x = 05;
$x = 055; */
/* $x = 0b110;  binarios */


/* $x = PHP_INT_MAX; */
/* $x = PHP_INT_MAX  +1;


var_dump($x);
 */
/* echo $x; */


/* Se pueden castear values con (int) o (integer)  examples; */



/* $x = (int) '5.9'; */
/* $x = (int) '87; */
/* $x = (int) '87tghfghfg'; */   /* si hay string al final lo cuadra a lo que tenga de numerico */
/* $x = (int) 'test';   */  /* si no la puede resolver , devuelve 0 */

/* $x = (int) 'test';  

var_dump($x); */


/* Como saber si es integer la variable? */


/* $x = (int) 'test';  

var_dump(is_int($x)); */   /* con el is_int, nos devolvera si es entero/integer o no */



/* Tambien se pueden usar los _ para que sea mas legible, ejemplo: */

/* $x = 200_000;  

echo ($x); */





/* FLOAT */

/* Los numeros que tienen decimales */

/* $x = 13.5;
 */

/* $x = 13.5e3; con strings */

/* $x = 2.434234;  */ /* negativo */


/* echo $x; */

/* si queremos confirmar si es un float o integer number, usamos el var_dump() */
/* var_dump($x); */



/* Y luego hay cosas importantes a entender como por ejemplo: */

/* $x = floor((0.1 + 0.7) * 10); */

/* 
Por que da 7 en vez de dar 0.8 *10 = 8
En este caso al usar el floor , php nos daria 7.99999999118 o algo asi y el floor quita todo lo que este a la derecha del 7.loquesea y lo elimina dejando solo el 7 */


/* echo $x; */






/* ARRAY */




?>