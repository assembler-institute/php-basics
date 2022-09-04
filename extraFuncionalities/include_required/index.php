<?php
function suma($num1, $num2){
    return $num1 + $num2;
}

#El include nos permite ejecutar el resto del código en caso de mal referenciarlo (Warning)
#Usar include, cuando el archivos no es muy importante
include 'ver.php';
print 'Hola Dummy Text...';

// require 'verr.php';
// print 'Hola Dummy Text...';
#El requieres NO, es más, te poner Fatal Error


#include_once --> Nos permite que el archivos solo se traiga una vez, con los cual, solo se ejecute una vez en vez de multiples veces por error
include_once 'ver.php';
// include_once 'ver.php';
?>