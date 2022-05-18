<?php
// $concertDate = new Date('1993-5-12');
// echo($concertDate);
// $date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
// echo $date->format('Y-m-d');


// $concertDate = new Date('1993-5-12');
// echo($concertDate);
// $date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
// echo $date->format('Y-m-d');

echo ("<h1>Dates on PHP</h1>");

echo("<h2>Create Date</h2>");
$concertDate = date_create("1992-12-5");
echo date_format($concertDate, "Y/m/d");

echo("<h2>Current Date</h2>");
echo(date('Y-m-d'));


echo("<h2>Current Day</h2>");
echo(date('d'));

echo("<h2>Current Month</h2>");
echo(date('m'));

echo("<h2>Current Minute</h2>");
echo(date('i'));
?>




