<?php
    echo "<h1>Strings</h1>";

    $a = 2;
    $b = "Is sunny";

    echo "Hello World";
    echo "<br>I have $a years old";
    echo "<br>Hello World".$b;

    $array = array("a", "e","i","o","u","A","E","I","O","U");
    $fixed = str_replace($array,":)","<br>Hello World<br>");
    echo $fixed;

    echo str_repeat("-=-", 20);
    echo "<br>";
    echo strlen($b);
    echo"<br>";
    echo strpos($b,"n");
    echo "<br>";
    echo ucfirst("hola mundo<br>");
    echo strtolower("HoLa WoRLd<br>");
    echo ucfirst(substr($b, 3 , 3));
?>