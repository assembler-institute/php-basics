<?php

$boolean = true;
echo "Boolean devuelve 1 si es true, si es false no devuelve nada. Devuelve: ".$boolean." por lo que es true.<br><br>";

$numero = 3;
echo "Variable tipo numero: ".$numero."<br><br>";

$numFlot = 1.234;
echo $numFlot."<br><br>";


$palabra = "Hola";
echo "Variable tipo String: ".$palabra."<br><br>";

$arreglo = array(1, 2, 3, 4, 5);
print_r ($arreglo);
echo "<br><br>";

$objeto = (object) ["nombre"=>"Juan Francisco", "apellidos"=>"Solano", "edad"=>36];
echo "Mi nombre es $objeto->nombre $objeto->apellidos y tengo $objeto->edad años. <br><br>";

$nulo = null;
echo "Aqui no muestra nada --> ".$nulo." <-- porque es false.";

?>