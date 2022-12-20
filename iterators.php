<?php


for($i=1; $i<=10; $i++){
    echo $i."<br>";
}

$array = ["a", "bb", "ccc"];
forEach($array as $value){
    print "<p>$value</p>\n";
}

$a= 5;
while($a<=20):
  echo $a."<br>";
  $a++;
endwhile;

 $b=1;
 do{
    echo $b."<br>";
    $b++;
 }while($b<=8);


?>