<?php
$arr = array("John", "Jacob", "Tom", "Tim");
echo "Array...<br>";

/*
1 - Return null
2 - Muestra el texto
3 - Contructor de lenguaje
4 - Puede mostrar mas de una string echo "hola","adios"
 */
foreach ($arr as $value) {
    echo "Value = $value <br>";
}
echo "\nDisplaying Array Values using print...<br>";
/*
1 - Return 1
2 - Muestra el texto
3 - Contructor de lenguaje
4 - Puede mostrar una sola string print("hola")
 */
foreach ($arr as $value) {
    print("Value = $value <br>"); //return 1 void (Mostrar texto) Constructor de lenguaje
}
echo "\nDisplaying Array Values using print_r...<br>";
/*
1 - Se utiliza para mostrar informacion de una variable (debug: var_dump)
2 - Es una funcion real
3 - No imprime nada visible para false y cadenas vacias
4 - Puede devolver el resultado en lugar de imprimirlo si se proporciona el segundo parámetro como true
*/
print_r($arr); //Se utiliza para mostrar informacion de una variable (Funcion Real)
  echo "<br>---------------------------";
$foo = array(5,10,15,30);

echo "<h4>print_r true</h4>";
$output = print_r( $foo,true );
var_dump($output);

  
echo "<h4>print_r false</h4>";
$output = print_r( $foo );
var_dump($output);
