<?php
echo '<strong>results</strong><br><br>';
// set default timezone
date_default_timezone_set('Europe/Madrid');

$weekDay = date('w');
$month = date('F');
$minutes = date('i');

// check if today is monday

if ($weekDay == 1) {
    echo 'Today is Monday <br>';
}

// check if month is october

if ($month == "October") {
    echo "We are in " . $month ."<br>";
} else {
    echo $month . "<br>";
}

//check minutes

if($minutes < 10){
    echo "the current minute is less than 10 <br>";
} else if ($minutes > 15){
    echo "the current minute is more than 15 <br>";
} else{
    echo "does not meet any conditions <br>";
}

//display different message depending on what day today is

switch ($weekDay) {
    case 1:
        echo "Hey man, today is Monday <br>";
        break;
    case 2:
        echo "Hey man, today is Tuesday <br>";
        break;
    case 3:
        echo "Hey man, today is Wednesday <br>";
        break;
    case 4:
        echo "Hey man, today is Thursday <br>";
        break;
    case 5:
        echo "Hey man, today is Friday <br>";
        break;
    case 6:
        echo "Hey man, today is Saturday <br>";
        break;
    case 0:
        echo "Hey man, today is Sunday <br>";
        break;
    
    default:
        echo "Never getting here...";
        break;
}


echo '
<h1>Conditionals</h1>
<pre><br>
date_default_timezone_set("Europe/Madrid");<br>
<br>
$weekDay = date("w");<br>
$month = date("F");<br>
$minutes = date("i");<br>
<br>
// check if today is monday<br>
<br>
if ($weekDay == 1) {<br>
    echo "Today is Monday <br>";<br>
}<br>
<br>
// check if month is october<br>
<br>
if ($month == "October") {<br>
    echo "We are in " . $month ."<br>";<br>
} else {<br>
    echo $month . "<br>";<br>
}<br>
<br>
//check minutes<br>
<br>
if($minutes < 10){<br>
    echo "the current minute is less than 10 <br>";<br>
} else if ($minutes > 15){<br>
    echo "the current minute is more than 15 <br>";<br>
} else{<br>
    echo "does not meet any conditions <br>";<br>
}<br>
' . '<br>
//display different message depending on what day today is<br>
<br>
switch ($weekDay) {<br>
    case 1:<br>
        echo "Hey man, today is Monday <br>";<br>
        break;<br>
    case 2:<br>
        echo "Hey man, today is Tuesday <br>";<br>
        break;<br>
    case 3:<br>
        echo "Hey man, today is Wednesday <br>";<br>
        break;<br>
    case 4:<br>
        echo "Hey man, today is Thursday <br>";<br>
        break;<br>
    case 5:<br>
        echo "Hey man, today is Friday <br>";<br>
        break;<br>
    case 6:<br>
        echo "Hey man, today is Saturday <br>";<br>
        break;<br>
    case 0:<br>
        echo "Hey man, today is Sunday <br>";<br>
        break;<br>
    <br>
    default:<br>
        echo "Never getting here...";<br>
        break;<br>
    }</pre>';
?>