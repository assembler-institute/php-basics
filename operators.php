
<!-- Arithmetic Operators -->

<?php

echo 5+5;
echo 5-5;
echo 5*5;  
echo 5/5;
echo 5%5; 
echo 8**5;




/* <!--  Comparison Operators  -->  
<!-- Cuando hay dos = los compara y con uno solo especifica que es igual a algo = -->
<!-- y si ponemos != significa que compara que no sean iguales -->
<!-- si pones tres ===  compara todo lo si es numero , string y el valor que tenga , si todo esta bien te sale un True -->
 */
$x = 5;
$y = 10;

if ($x == $y) {
    echo "True!";
}
else {
    echo "False!";
}

$x = 5;
$y = 10;

if ($x >= $y) {
    echo "True!";
}
else {
    echo "False!";
}




/* <!-- Logical Operators --> */



$x = 10;
$y = 20;

if ($x == $y or 1 == 1) {
    echo "True";
}






$x = 10;
$y = 20;

if ($x == $y and 1 == 1) {
    echo "True";
}


$x = 10;
$y = 20;

if ($x == $y || 1 == 1) { /* es igual que Or */
    echo "True";
}



$x = 10;
$y = 20;

if ($x == $y && 1 == 1) {   /* este es igual que el   and */
    echo "True";
}

$x = 10;
$y = 20;

if ($x == $y xor 1 == 1) {   /* este significa que solo 1 de las condiciones puede ser True */
    echo "True";
}


?>