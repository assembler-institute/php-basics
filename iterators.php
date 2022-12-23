<?php

$n = 1;
$p = 1;

#Ciclo While

while($n <= 5){

    $n++;
    echo $n;
}

echo '<br><br>';

#Ciclo Do While

do{
    echo $p;
    $p++;
}
while($p <= 5);

echo '<br><br>';

#Ciclo For

for($i = 0; $i <= 5; $i++){
    echo $i;
}

echo '<br><br>';

#Ciclo Foreach

$frutas = ['Mango', 'Fresa', 'Uva'];
foreach ($frutas as $valor) {
  echo $valor;
}

?>