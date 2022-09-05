<?php
// Con este método va a ser más estricto y no deja convertir string numero en numero
// declare(strict_types=1);

function cuadrado (int $numero){
    return $numero * $numero;
}
#Aunque pases el numero en string te hace el calculo mientras pueda convertir ese valor a Número
$numero='5';
echo 'El cuadrado de '. $numero .' es '. cuadrado($numero);

print '<br><br>';
#Esto nos sirve para trabajr con el mismo tipo de datos cuando se trabaja en grupo
#Nos permite evitar que los compareños pases datos en string o cualquier cosa

## Funcioens del Retorno ##

function pasarEdad(): int{
    $edad = '20';
    return $edad;
}

echo pasarEdad();
#Aqui pasa lo mismo que arriba, pues, cuando se pasa un numero en string te lo convierte en numero. Por eso, tenemos que usar declare(strict_types=1) para evitar que pasen estan cosas.

?>