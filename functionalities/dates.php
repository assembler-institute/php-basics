<?php
# DateTime Class accept 2 argumentes [datetime:string & datetimezone]
print '-------------------- TimeZone- Date >--------------------<br>';
$dateTime = new DateTime();
print ' <b>(Y/m/d)</b> <br>';
echo $dateTime->format('Y/m/d');
echo '<br>';
var_dump($dateTime);
echo '<br>';


echo '<br>';
print '<br>--------------------< <b>TimeZone-Madrid</b> >--------------------<br>';
// Set timezone Madrid so that we can print Europe/Madrid name insted of Europe/Berlin which is by default
$dateTime->setTimezone(new DateTimeZone('Europe/Madrid'));
echo $dateTime->getTimeZone()->getName().' -- '.$dateTime->format('d/m/Y H:i:s A');
echo '<br>';

print '<br>--------------------< <b>Numerical-Format-Month</b> >--------------------<br>';
echo $dateTime->format('m');
echo '<br>';
print '--------------------< <b>Current-Minutes</b> >--------------------<br>';
echo $dateTime->format(' 00-i');
echo '<br>';
print_r($dateTime);



echo '<br>';
echo '<br>';
print '--------------------< TimeZone:London --> Changing Date & Time >--------------------<br>';
$dateTime->setTimezone(new DateTimeZone('Europe/London'));
print_r($dateTime);

echo '<br>';
echo '<br>';

$dateTime->setDate(1997, 4, 21)->setTime(2,15);
echo $dateTime->getTimeZone()->getName().' -- '.$dateTime->format('d/m/Y H:i:s A');
echo '<br>';

?>