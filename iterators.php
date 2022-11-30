<?php
$style= "style='font-family: helvetica;'";
$line="style='border: 1px solid rgb(230,230,230);'";

print("<h3 $style> - - Generate a snippet that makes use of for / foreach / while / do while</h3>");

//Generate an instruction that makes use of for 
print("<h5 $style>Snippet [ for ] </h5>");
print("<pre style='font-size: 15px'>
for (i = 1; i <= 10; i++){
    echo i
}
</pre>");
print("<h5 $style>Output</h5>");

// CODE
for ($i = 1; $i <= 10; $i++) {
    echo "$i \n";
}

print("<hr $line/>");

//Generate an instruction that makes use of foreach 
print("<h5 $style>Snippet [ foreach ]</h5>");
print("<pre style='font-size: 15px'>
array = array(1, 2, 3, 4);
foreach (array as & valor) {
    valor = valor * 2;
}
</pre>");
print("<h5 $style>Output</h5>");

// CODE
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {
    $valor = $valor * 2;
    echo "$valor \n";
}

print("<hr $line/>");

//Generate an instruction that makes use of while 
print("<h5 $style>Snippet [ while ]</h5>");
print("<pre style='font-size: 15px'>
y = 0;
while( ++y < 10 );
echo y;
</pre>");
print("<h5 $style>Output</h5>");

// CODE
$y = 0;
while( ++$y < 10 );
echo $y;

print("<hr $line/>");

//Generate an instruction that makes use of do while 
print("<h5 $style>Snippet [ do while ]</h5>");
print("<pre style='font-size: 15px'>
x = 1;

do {
  echo 'The number is: x';
  x++;
} while (x <= 5);
</pre>");
print("<h5 $style>Output</h5>");

// CODE
$x = 1;

do {
  echo "<p $style>The number is: $x </p>";
  $x++;
} while ($x <= 5);

?>