<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <!--    importante :
  'tomorrow'
  'next tuesday'
  'last day of month'
  'tomorrow noon'
  '10/10/2021 7:00' 
 -->


  <?php
/*  Date & Time */

$currentTime = time();

echo $currentTime . '<br />' ; 

/* echo $currentTime + 5 * 24 * 60 *60;       los dias dentro de 5 dias, 5 dias, 24horas..etc */

/* echo $currentTime - 60 * 60 * 24;   el tiempo de ayer */

/* Importante */
echo date('m/d/Y g:ia ') . '<br />';  

/* la g nos da el formato 24h sin ceros, la i los minutos sin ceros y la a nos dice si es A.M o P.M */


/* Otro ejemplo */
echo date('m/d/Y g:ia ', $currentTime + 5 * 24 * 60 *60 ) . '<br />';  

/* Y para cambiar la franja horaria, seria algo asi: */
date_default_timezone_set('UTC');

echo date('m/d/Y g:ia ') . '<br />'; 


echo date_default_timezone_get()  .  '<br />';


/* Otra cosa importante para convertir 'parse dates' string representation en unidades de tiempo, ejemplo: */

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br />';   
/* String to time function */
echo strtotime('2021-01-18 07:00:00') . '<br />';

/* Mola poder ponerle por ejemplo el tomorrow asi: */
/*  o 'las day of february'  o 'second friday of January'  etc */
echo date('m/d/Y g:ia', strtotime('tomorrow'));


?>

  <!--   Info importante por si se me olvida algo :
  https://www.php.net/manual/en/datetime.format.php
  https://www.php.net/manual/en/timezones.php
  https://www.php.net/manual/en/datetime.formats.relative.php -->
</body>

</html>