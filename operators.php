<?php

#arithmetic operators

var_dump(1+1);

echo"<br>";

var_dump(2-1);

echo"<br>";

var_dump(2*3);

echo"<br>";

var_dump(10%3);

echo"<br>";

var_dump(15/2);

echo"<br><br>";

#comparison operators

var_dump(2==2);

echo"<br>";

var_dump(2!=1);

echo"<br>";

var_dump(5<10);

echo"<br>";

var_dump(10>5);

echo"<br>";

var_dump(5<=5);

echo"<br>";

var_dump(5>=2);

echo"<br><br>";

#logical operators

$first=true;
$second=false;

if(($first===true) && ($second===false)){
    echo "true";
}

echo"<br>";

if(($first===true) || ($second===false)){
    echo "true";
}

echo"<br>";


if(($first===true) and ($second===false)){
    echo "true";
}

echo"<br>";

if(($first===true) or ($second===false)){
    echo "true";
}

echo"<br>";

if(!$second){
    echo "false";
}

echo"<br>";

if(($first===true) xor ($second===true)){
    echo "true";
}

?>