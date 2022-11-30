<?php
 $str = "hola caracola ";
 echo $str."<br>";
 $val = "Caracola";
 $str1 = "HOLA $val";
 echo $str1."<br>";
 $str2 ="hola ".$val;
 echo $str2."<br>";
 echo str_replace("caracola", "assemblers", $str)."<br>";
 echo str_ireplace("CARACOLA", "assemblers", $str)."<br>";
 echo str_repeat($str, 3)."<br>";
 echo strlen($str)."<br>";
 echo strpos($str, "caracola")."<br>";
 echo strtoupper($str)."<br>";
 echo strtolower($str1)."<br>";
 echo substr($str, 0, 5)."<br>";


 ?>