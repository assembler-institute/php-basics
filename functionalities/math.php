<?php
// Pi function
echo PI();
echo'<br>';
// Exponentes function: cuadrados, cubos, etc.
echo pow(5,2);
echo'<br>';
// Raiz 
echo sqrt(144);
echo'<br>';
// Floor(redondeo hacia abajo) y Ceil(hacia arriba)
echo floor(4.3) . ' --- ';
echo ceil(4.3);



echo '<br>';
print '<br>--------------------< Absolute Value >--------------------<br>';
 $absoluteValue = -1.5;
 echo  $absFunciton = abs($absoluteValue);
  
    
echo '<br>';
print '<br>--------------------< Rounded Value >--------------------<br>';
$roundValue = 1.6;
echo $roundFunction = round($roundValue); 


echo '<br>';
print '<br>--------------------< Highest Value >--------------------<br>';
// $highestNum = (max(2,0,-2,200,180,-55,1)). '<br>';
// $lowestNum (min(2,0,-2,200,180,-55,1));
$arr = array(2,0,-2,46,-1,150,580,-55,1);
// echo $max=$arr[0];

function getMaxValue($arr){
    // Variable max en la posicion 0
    $max=$arr[0];

    for($i=1; $i<count($arr); $i++){
        // echo $arr[$i];

        if($max < $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}
echo getMaxValue($arr);

echo '<br>';
print '<br>--------------------< Lowest Value >--------------------<br>';
function getMinValue($arr){
    // Variable max en la posicion 0
    $min=$arr[0];

    for($i=1; $i<count($arr); $i++){
        // echo $arr[$i];

        if($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo getMinValue($arr);

    echo '<br>';
    print '<br>--------------------< Random Value >--------------------<br>';
    // Nos devuelve numeros random pero muy grandes
    // $randomValue = rand();
    // Nos devuelve numeros entre 1 y 50
    $randomValue = rand(1,50);
    echo $randomValue; // <-- random integer
?>