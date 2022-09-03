<?php
$meses = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'];

print "--- [ Ciclo FOR ] --- <br>";
print "<br>---------- (i++) --------------<br>";
for($i=1; $i<=5; $i++){
    #cuando la condicion es i<5: Hola se imprime 4 veces
    // echo 'Hola <br>';
  
    #Si la condicion es i<=5: 5 veces
    // Concatenamos 123.. con el string Lokesh
    echo $i . ' Lokesh <br>';
}
echo '<br>';

for($i=0; $i<count($meses); $i++){
    echo $meses[$i]. "<br>";
}
echo '<br>';
for($i<count($meses);$i>=0; $i--){
    echo $meses[$i]."<br>";
}

print "<br>---------- (i--) --------------<br>";
for($i = 10; $i>= 1; $i--){
    echo $i . '<br>';
} 





print "--- [ Ciclo While ] ---";
print "<br>---------- (x++) --------------<br>";
$x=1;
while($x <=10){
    echo $x ;
    // Esto es necesario pra evitar el bucle infinito
    $x++ . '<br>';
}
echo '<br>';

$xyz = 0;

while($xyz<count($meses)){
    echo $meses[$xyz]. '<br>';
    $xyz++;
}

print "<br>---------- (x--) --------------<br>";
$x=10;
while($x >=1){
    echo $x;
    // Esto es necesario pra evitar el bucle infinito
    $x--;
}
echo '<br>';





print "<br>--- [ Ciclo DO While ] ---";
print "<br>---------- (gg++) --------------<br>";
// A diferencia de For loop y While, el Do While al menos se ejecuta una vez 'aunque falle la condicion'
// En nuestro caso, al menos nos imprime un 1
$gg=1;

do{
echo $gg . '<br>';
$gg++;
}while($gg == 50);

echo '<br>';






print "<br>--- [ Ciclo ForEach] ---";

$coche = ['nombre'=>'Seat', 'año'=>2018, 'color'=>'rojo', 'fabricacion'=> 'España']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        // Este ciclo se ejecuta tantas veces como los elementos que haya dentro del array $meses
            // foreach($meses as $mes){
            //     echo '<li>'. $mes .'</li>';
            // }
            foreach($coche as $propiedades => $valor){
                echo $propiedades.': ' . $valor.'<br>';
            }
        ?>
    </ul>
</body>
</html>