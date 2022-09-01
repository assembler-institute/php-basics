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
  
   # Ojo, mucho con las condiciones..tiene que tener sentido con la variable definida sino entrmos en un bucle infinito
}

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

print "<br>---------- (x--) --------------<br>";
$x=10;
while($x >=1){
    echo $x;
    // Esto es necesario pra evitar el bucle infinito
    $x--;
}
echo '<br>';
print "<br>--- [ Ciclo DO While ] ---";
print "<br>---------- (y++) --------------<br>";


?>