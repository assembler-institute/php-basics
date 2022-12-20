<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        color: #18978F;
    }

    h4 {
        font-weight: bold;
        font-size: 16;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>

<?php

echo "<h4>&dollar;currentDay = new DateTime();</h4>";

$currentDay = new DateTime();


echo "<h2>Current day = Monday</h2>";

echo "<h4>&dollar;day = &dollar;currentDay -> format('D');</h4>";
$day = $currentDay->format('D');

echo '<pre><h4>
if ($day == "Mon") {
    echo "We are on Monday";
}
</h4></pre>';

if ($day == 'Mon') {
    echo "We are on Monday";
}

echo "<h2>Current month = October</h2>";

echo "<h4>&dollar;month = &dollar;currentDay -> format('M');</h4>";
$month = $currentDay->format('m');

echo '<pre><h4>
if ($month == 10) {
    echo "We are in October";
}
</h4></pre>';

if ($month == 10) {
    echo "We are in October";
}

echo "<h2>Double condition</h2>";

echo "<h4>&dollar;currentMinute = &dollar;currentDay -> format('i');</h4>";
$currentMinute = $currentDay->format('i');

echo '<pre><h4>
if ($currentMinute < 10) {
    echo "the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}
</h4></pre>';

if ($currentMinute < 10) {
    echo "the current minute is less than 10";
} elseif ($currentMinute > 15) {
    echo "the current minute is more than 15";
} else {
    echo "does not meet any conditions";
}


echo "<h2>Switch</h2>";

echo "<h4>&dollar;dayOfWeek = &dollar;currentDay -> format('D');</h4>";
$dayOfWeek = $currentDay->format('D');

echo '<pre><h4>
switch ($dayOfWeek) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    default:
        echo "Today is Sunday";
}

</h4></pre>';

switch ($dayOfWeek) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    default:
        echo "Today is Sunday";
}
