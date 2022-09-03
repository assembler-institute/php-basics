<?php
#Funciones sin parámetros
// function saludo(){
//     echo "Hola Funcion <br>";
// }
// saludo();

print '<br>';
print "--- [ #Funciones con parámetro: ADD ] --- <br>"; 

#Funciones con parámetro
function sumar($a, $b){
    echo $a + $b;
}
sumar(5,5);

print '<br>';
print "--- [ #Funciones con parámetro: Multiplicar ] --- <br>"; 

#Funciones con parámetro
function multi($a, $b){
    echo $a * $b;
}
multi(5,10);

print '<br>';
print "--- [ #Funciones con parámetro: Dividir ] --- <br>"; 

#Funciones con parámetro
function dividir($a, $b){
    echo $a / $b;
}
dividir(100,5);


print '<br>';
print "--- [ #Operation with parameter received ] --- <br>"; 
 function operar($a, $operation, $b){
        if ($operation == "+") {
            return $a + $b;
        }else if ($operation == "*") {
            return $a * $b;
        }else if ($operation == "/") {
            return $a / $b;
        } else if ($operation == "%") {
            return $a % $b;
        }
    }
 
    echo operar(4, '%', 3);

print '<br>';


/* 
#Funiones con retorno
function retorno($rt){
    return $rt;
}
// Se neceesita echo para llamar la funcion y tu retornas lo que quieras ()
// Utilizada en POO
echo retorno('retornar');

*/
?>