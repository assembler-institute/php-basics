<?php
$datetime = new DateTime();
//instanciamos el objeto date

//con el metodo date_format podemos darle el formato que queramos a las fechas
echo date_format($datetime, 'Y-m-d');

echo "<br/>";
$date = date('d-m-Y');
echo $date;

echo "<br/>";
$day = date('l');
echo "Hoy es $day";

echo "<br/>";
$month = date('n');
echo "El mes es $month";


echo "<br/>";
$minutes = date('i');
echo "Es el minuto $minutes";

?>