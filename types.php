<?php
#boolean
$a = "cosa"; 
$b = "linda"; 

var_dump($a);
var_dump($b);

echo "<br><br>";
#integer
$a = 10; 			
var_dump($a);



echo "<br><br>";
#floats
$a = 4.70;
var_dump($a);

echo "<br><br>";

#string
$str = "Scoobido papa";
var_dump($str);
echo "<br><br>";
#array
$array = array('ussop', 'sanji', 'chopper', 'nami');
var_dump($array);
echo "<br><br>";
#object
$yonkou = (object)["yonkou1"=>"Shanks","yonkou2"=>"Kurohige","yonkou3"=>"Luffy"];
echo "This is a emperors of sea: $yonkou->yonkou3<br>";
var_dump($yonkou);
echo "<br><br>";
#null
$text = 'Hello darkness my old friend';
$text = null; 
var_dump($text);
?>