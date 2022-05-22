<?php


/* $array = array('Paco', 'Pepe', 'Raul');
print_r($array);

$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array); */


/* Multidimensional array
$data = array(
    array(1, 2, 3),
     "John", 
     "Jane"
    );

 print_r($data);

echo $data[0][1]; */





/* Lo que metemos dentro del corchete se llama index o key, pero si no se definen las keys, PhP lo hara automaticamente,empezando en 0,  */

/* $progranmingLanguages = ['PHP', 'Java', 'Python'];

$name = 'Gio';
 */
/* echo $name[1];

echo $progranmingLanguages[0]; */


/* Para ver si el item existe y envitar errores podemos usar por ejemplo: 
la funcion isset . ideal para saber si existe*/

/* var_dump(isset($programingLanguages[0]));
var_dump(isset($programingLanguages[3])); */


/* Y si queremos cambiar pro ejemplo 'Java' por C++? */


/* $progranmingLanguages[1] = 'C++'; */
/* echo $progranmingLanguages[1]; */
/* var_dump($progranmingLanguages);
print_r($progranmingLanguages); */

/* la mejor manera de verlo seria asi:
 echo '<pre';
 print_r($programingLanguages);
 echo '</pre>';
 */



/*$progranmingLanguages = ['PHP', 'Java', 'Python'];

$progranmingLanguages[] = 'C++';   /* Esta es la forma mas sencilla */
/*array_push($progranmingLanguages, 'C++', 'C', 'GO');  /* Esta es mas complicada */
/* estas son las dos formas de agreganrelementos al array como el push() de javascript
 */



/* array_pad() - Rellena un array a la longitud especificada con un valor
list() - Asignar variables como si fueran un array
count() - Cuenta todos los elementos de un array o algo de un objeto
range() - Crear un array que contiene un rango de elementos
foreach
El tipo array

https://www.php.net/manual/es/function.array.php
https://www.youtube.com/watch?v=wLoPGWwMamc */
?>





<?php


$programingLanguages = ['PHP', 'Java', 'Python'];


var_dump($progranmingLanguages['php']);



$progranmingLanguages = [
    'php ' => '8.0',
    'python' > '3.9'
];



/* echo '<pre';
print_r($programingLanguages);
echo '</pre>';

echo $progranmingLanguages['php'];


$programingLanguages['go'] = '1.15';

echo $programingLanguages;



https://www.youtube.com/watch?v=C8ZFLq24g_A
https://www.php.net/manual/es/function.array.php */

?>