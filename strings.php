<?php

/* $str = "The Quick brown Fox juMps over the moon";
//echo $str;
$lower = strtolower($str);
echo $lower, '<br />';

$upper = strtoupper($str);
echo $upper, '<br />';

$ucwords =ucwords($str);  //si quieres que todas esten bien, pon el ($lwer);
echo $ucwords, '<br />';




$str = "YES";

if(strtolower($str) =='yes'){ 
process for yes
}


$password = " password ";     No pasara por los espacios del ejemplo 
if($password == "password"){
    then log them in
}

if(trim($password) == "password") {   En este caso la funcion trim quita los espacios y entonces, si se podra loguear
    then log them in
}

/* TRIM

trims space offf the beginning of the string
ltrim($password):
trims space off the end of the string
rtrim($password);*/
 


$csv = "45,23,78,99,87,";
//quiero quitar la coma final, remove last comma by using trim function

echo rtrim($csv,',');
$trimmedCsv = rtrim($csv,',');
$csvArray = explode (',', $trimmedCsv);
var_dump($csvArray);
echo '<br />';


/* sin comas y tipo array hacia abajo con br */
foreach($csvArray as $id){
    echo $id, '<br />';
}




//info: https://www.youtube.com/watch?v=SLYSb_IWNTw

?>