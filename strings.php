<?php

//Print a text string
echo "Hello world ";

echo "<br><br><br><br>";

//Print a text string that interpret variables
$name = "Ivan Escribano";
echo "Hello $name ";

echo "<br><br><br><br>";

//Concatenate a previously declared variable in a text string
$age = 23;
echo "Hello my name is". $name." im " .$age. " years old";


echo "<br><br><br><br>";

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$str1 = "Hola como estas Ivan";
echo str_ireplace("COMO ESTAS" , "que tal" , $str1);



echo "<br><br><br><br>";


//Execute the function that allows you to write a text N times
echo str_repeat("REPITEME ESTE TEXTO<br>" , 3);


echo "<br><br><br><br>";

//Execute the function that allows to obtain the length of a text string
echo strlen("Ivan");


echo "<br><br><br><br>";


//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo stripos("Hola me llamo Ivan y tu" , "Ivan");

echo "<br><br><br><br>";


//Execute the function that allows a text string to be capitalized
echo strtoupper("me llamo Ivan");



echo "<br><br><br><br>";


//Execute the function that allows you to transform a text string to lowercase
echo strtolower("me llamo IVAN");


echo "<br><br><br><br>";

//Execute the function that allows to obtain a text substring from a given position
echo substr("me llamo Ivan"  , 9);


