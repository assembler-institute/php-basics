<?php
#We are on Monday
$today = "Mon";
if(date("D") == $today){
    echo "We are on Monday";
} else {
    echo "Today is not Monday";
}
echo "<br><br>";
#We are in October

$today = "October";
if(date("F") == $today){
    echo "We are on October";
} else{
    echo "We are on&nbsp", date("F");
}

echo "<br><br>";

#Double condition
if(date("i") < 10){
    echo "the current minute is less 10";
}
else if(date("i") > 15){
    echo "the currente minute is more than 15";
}
else{
    echo "does not meet any condition";
}
echo "<br><br>";

#Switch 
$dia = date("D");

switch($dia){
    case 'Mon':
    echo "Today is monday";
    break;
    case 'Tue':
    echo "Today is tuesday";
    break;
    case 'wed':
    echo "Today is wednesday";
    break;
    case 'thu':
    echo "Today is thusday";
    break;
    case 'fri':
    echo "Today is friday";
    break;
    case 'sat':
    echo "Today is satuday";
    break;
    case 'sun':
    echo "Today is sunday";
    break;

}
?>