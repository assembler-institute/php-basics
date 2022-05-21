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


/* $lista = array("foo", "bar", "hello", "world");
var_dump($lista);

https://www.php.net/manual/en/language.types.array.php */





/* Classes & Objects */

/* Con el require lo importamos de la fila "Transaction" que creramos antes, esa es nuestra class */
/* Class puede tener variables como propiedades y funciones que se llaman Methods.
Ahora meteremos unas cuantas propiedades a nuestra clase Transaction
 */

/* Tiene que tener como minimo 2 propiedades, cantidad y descripcion. */
/* Y la visibilidad de la misma puede ser Public,Private,Protected se llaman Access modifiers, lo podemos ver en el archivo de Transaction*/


/* 
require_once './Transaction.php';
/* Entre parentesis se pasan los argumentos
$transaction = new Transaction(100, 'Transaction 1');

$transaction->addTax(8);
$transaction->applyDiscount(10);

var_dump($transaction->amount);

 */




 /* claass className */

/* Property is just another word for variables (llamamos las variables dentro de la clase)
Y los Methods es cuando llamamos las funciones dentro de la clase. */

/* {
    var $propertyName = value;
    function methodName()

{
    //$this keyword is used to cal properties & methods within the class
$this->propertyName;
$this->methodName();
}
} */

/* $obj = new className;  //$obj variable becomes data type object
$obj->methodName();
$obj->propertyName; */

/* Class is like a Template and the real things here are Objects */
/* 
class Game {

    const BR = '<br />';

    var $price;
    var $name;
    var $photo;
    var $dir = './game';


public function print_game(){
echo "<div style='float: left; margin-right: 40px; '>";
echo "<font size='5px'>{$this->name}</font>".self::BR;
echo "<img src='{this->dir}{$this->photo}'>".self::BR;
echo '$'.$this->price;
echo "</div";
}

}

$game = new Game; //$game is the object type of Game class
$game->name = 'Bioshock Infinite';
$game->price = 14.99;
$game->photo = './game/BioShock_cover.jpg';

$game->print_game();


/* Other example: */


/* 

$game->name = 'The Witcher 3';
$game->price = 27.89;
$game->photo = 'the-witcher-3.jpg';

$game->print_game(); */



//Info: https://www.youtube.com/watch?v=yrIbbKuSqK8



/* La manera automatizada de hacer lo de arriba con codigo limpio es algo asi: */

/* 

public function set_game($name,$price,$photo){
    $this->name = $name;
    $this->price = $price;
    $this->photo = $photo;
}

$game->set_game('Overwatch', 44.99, 'overwatch.jpg'); */

?>