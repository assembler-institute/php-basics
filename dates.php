<?php
$style= "style='font-family: helvetica;'";
$line="style='border: 1px solid rgb(230,230,230);'";

print("<h3 $style> - - Generate a snippet that makes use of date</h3>");

//Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
print("<h5 $style>Snippet [ DateTime ] </h5>");
print("<pre style='font-size: 15px'>
fecha = new DateTime();
echo fecha->format('Y-m-d');
</pre>");
print("<h5 $style>Output</h5>");

// CODE
$fecha = new DateTime();
echo "<p $style>" . $fecha->format('Y-m-d')."</p>\n";

print("<hr $line/>");

//Get the current date in any format
print("<h5 $style>Snippet [ current date ] </h5>");
print('<pre style="font-size: 15px">
date("Y-m-d");
</pre>');
print("<h5 $style>Output</h5>");

// CODE
echo date('Y-m-d');

print("<hr $line/>");

//Get the current day
print("<h5 $style>Snippet [ current day ] </h5>");
print("<pre style='font-size: 15px'>
date('d');
</pre>");
print("<h5 $style>Output</h5>");

// CODE
echo date('d');

print("<hr $line/>");

//Get the current month in numerical format (1-12)
print("<h5 $style>Snippet [ current month 1-12 ] </h5>");
print("<pre style='font-size: 15px'>
date('m');
</pre>");
print("<h5 $style>Output</h5>");

// CODE
echo date('m');

print("<hr $line/>");

//Get the current minute with leading zeros (00 - 59)
print("<h5 $style>Snippet [ current minute ] </h5>");
print("<pre style='font-size: 15px'>
date('i');
</pre>");
print("<h5 $style>Output</h5>");

// CODE
echo date('i');
