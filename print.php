<?php

// Print permite imprimir un solo resultado, se permite añadir los etiquetas

print "<h1> Mi codigo PHP - print </h1>";

//Echo permite imprimir varios resultadoe

echo "<p> Mi primer codigo PHP - echo </p>", "<h3> Mi segundo codigo PHP - echo </h3>";

// imprimen los detalles de una variable

$letKnow = array( 5, 0.0, "Hola", false, '' );
print_r($letKnow);
echo "<br><br>";

// imprimen los detalles de una variable con el typo de datos

var_dump($letKnow);

?>

