<?php include './incl/header.php'?>
<?php
echo "<h1>Strings</h1>";
$a="andrecito";
$b="arboleda";
$c="c";
echo $a."<br>";
echo "$a $b"."<br>";
$vowels= array("a", "e", "i", "o", "u","A", "E", "I", "O", "U",);
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP"."<br>");
echo $onlyconsonants;

//strreplace
// $string = 'HEllo WorlD';
// strtolower($string);
// $onlyconsonants2 = str_replace($string,"","Hello World");
// echo $onlyconsonants2;

echo str_repeat($a."<br>", 10);
echo strlen($a."<br>"); 
echo strpos($a,$c);
echo "<br>";
echo strtoupper($a."<br>");
echo strtolower($a."<br>");
echo substr($a, -4)."<br>"; 
?>
<?php include './incl/footer.php'?>