<?php 
$style= "style='font-family: helvetica;'";
$line="style='border: 1px solid rgb(230,230,230);'";
    
print("<h3 style='font-family: helvetica;'> - - Generate an instruction that makes use of echo / print / print_r</h3>");

//Generate an instruction that makes use echo
print("<h5 $style>Snippet [ echo ]</h5>");

print("<pre style='font-size: 15px'>
name = 'Assembler';
echo 'echo Hola name';
</pre>");

$name = "Assembler";
print("<h5 $style>Output</h5>");
echo "<p $style> echo Hola $name </p> \n";

print("<hr $line/>");

//Generate an instruction that makes use of print
print("<h5 $style>Snippet [ print ]</h5>");

print('<pre style="font-size: 15px">
$name = "Assembler";
$print "print Hola name";
</pre>');
    
print("<h5 $style>Output</h5>");
print "<p $style> print Hola $name </p>";

print("<hr $line/>");

//Generate an instruction that makes use of print_r 
$var = [
    "animal"=>"cat", 
    "name"=>"Laura",
    $out = [ "color"=>"blue"]
];
print("<h5 $style>Snippet [ print_r ]</h5>");
print('<pre style="font-size: 15px">
$var = [
    "animal"=>"cat", 
    "name"=>"Laura",
    $out = [ "color"=>"blue"]
];

print_r($var);
</pre>');
print("<h5 $style>Output</h5>");

print_r($var);
