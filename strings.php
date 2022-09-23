<?php
print "hola assembler print <br>";
$valprint = "hola aSSembler <br>";
$valprint2 = "22hola assembler <br>";
$valprint3 = "22hola assembler ";
print_r ($valprint);
print_r ($valprint3 .$valprint);
echo "hola assembler echo <br>";
// echo ($valprint);
// print ($valprint);
echo str_replace("Hello","Peter","Hello world! <br>");
echo str_ireplace("hello","petEr","Hello world! <br>");
echo str_repeat("cojo ",3)."<br>";
echo strlen($valprint3)."<br>";
echo strpos($valprint,"o")."<br>";
echo strtoupper($valprint)."<br>";
echo strtolower($valprint)."<br>";
echo substr($valprint,3,8)."<br>";
?>