<?php
 echo nl2br("this is a text printed \n\n");

 $variable="this is my variable";
 echo nl2br("$variable\n");
 echo nl2br("this is a text printed, and $variable\n\n");
 
 $originalString="este es mi texto, en el reemplazaré la palabra reemplazo por reemplazada";

function remplacer($text,$reemplacerWord,$reemplacedWord, $rempalacedWordCaseS){

    echo nl2br("$text\n");
    echo str_replace($reemplacedWord,$reemplacerWord,$text);
    echo nl2br("\nSensitive case\n\n");
    echo str_ireplace($rempalacedWordCaseS,$reemplacerWord,$text);
    echo nl2br("\nNon sensitive case\n\n");

 }
remplacer($originalString,"reemplazo","reemplazada", "REeMplazo" );


$repitedText=nl2br("Este texto será repetido 5 vezes\n");

function repeat($text){
    echo str_repeat($text,5);
}
repeat($repitedText);

$lenghtText=nl2br("\nEsta es la cantidad de caracteres de este texto\n");

function length($textLen){
    echo ($textLen);
    echo ("\n");
    echo strlen($textLen);
    echo ("\n\n");
}
length($lenghtText);

$posText=nl2br("\nEsta es la posicion de la primera coincidencia de caracteres con la palabra hola en este texto\n");

function textPos($text){
    echo ($text);
    echo ("\n");
    echo strpos($text, "hola");
    echo ("\n\n");
}
textPos($posText);

$capitalText=nl2br("Este texto será capitalizado\n");

function capiPos($text){
    
    echo nl2br("\n\n\n$text");
   
    echo strtoupper($text);
    echo ("\n");
}
capiPos($capitalText);

$loweText=nl2br("\nESTE TEXTO SERÁ DESCAPITALIZADO\n");

function lowPos($text){
    echo ($text);
    echo ("\n");
    echo strtolower($text);
    echo ("\n\n");
}
lowPos($loweText);


$posWord=nl2br("\nEsta es la palabra que coincide con la posicion 11 en este texto\n");

function wordPos($text){
    echo ($text);
    echo ("\n");
    echo substr($text,18,7);
    echo ("\n\n");
}
wordPos($posWord);



?>