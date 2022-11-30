<?php
$style = "style='font-family: helvetica;'";
$line = "style='border: 1px solid rgb(230,230,230);'";

print("<h3 $style> - - Generate a snippet that makes use of conditionals</h3>");

//Create a simple condition that evaluates whether the current day is Monday
print("<h5 $style>Snippet [ evaluates current day ] </h5>");

print("<pre style='font-size: 15px'>
date = new DateTime();
isMonday = date->format('D');

if (isMonday == 'Mon') {
    echo We are on Monday;
}else {
    echo Not Monday my friend!;
}
</pre>");

$date = new DateTime();
$isMonday = $date->format('D');

print("<h5 $style>Output</h5>");

if ($isMonday == 'Mon') {
    echo "<p $style>We are on Monday</p>";
} else {
    echo "<p $style>Not Monday my friend!</p>";
}

print("<hr $line/>");

//Create a simple condition that evaluates whether the current month is October. 

print("<h5 $style>Snippet [ evaluates current month ] </h5>");

print("<pre style='font-size: 15px'>
date = new DateTime();
isOctober = date->format('M');

if (isOctober == 'October') {
    echo We are on October;
}else {
    echo We are on isOctober;
}
</pre>");

// CODE
$date = new DateTime();
$isOctober = $date->format('M');

print("<h5 $style>Output</h5>");

if ($isOctober == 'October') {
    echo "<p $style>We are on October</p>";
} else {
    echo "<p $style>We are on <b>$isOctober</b></p>";
}

print("<hr $line/>");

//Create a double condition

print("<h5 $style>Snippet [ double condition ] </h5>");

print("<pre style='font-size: 15px'>
date = new DateTime();
minutes = date->format('i');

if (minutes < 10) {
    echo Current minute: minutes is less than 10;
}else if (minutes > 15){
    echo Current minute: minutes is greater than 15;
}else {
    echo Current minute: minutes is greater than 10 and less than 15;
}
</pre>");

// CODE
$date = new DateTime();
$minutes = $date->format('i');

print("<h5 $style>Output</h5>");

if ($minutes < 10) {
    echo "<p $style>Current minute: $minutes' is less than 10'</p>";
} else if ($minutes > 15) {
    echo "<p $style>Current minute: $minutes' is greater than 15'</p>";
} else if ($minutes > 10 || $minutes < 15) {
    echo "<p $style>Current minute: $minutes' does not meet any conditions</p>";
}

print("<hr $line/>");

//Create a switch type control structure to display a different message depending on the current day of the week
print("<h5 $style>Snippet [ switch control ] </h5>");

print("<pre style='font-size: 15px'>
date = new DateTime();
day = date->format('D');

switch (day) {
    case 'Mon':
        echo Today is: day;
        break;
    case 'Thu':
        echo Today is: day;
        break;
    case 'Wed':
        echo Today is: day;
        break;

    [ ... rest of days ]
    
    default:
        break;
}
</pre>");

// CODE
$date = new DateTime();
$day = $date->format('D');

print("<h5 $style>Output</h5>");

switch ($day) {
    case 'Mon':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Thu':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Wed':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Ths':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Fry':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Sat':
        echo "<p $style>Today is: $day</p>";
        break;
    case 'Sun':
        echo "<p $style>Today is: $day</p>";
        break;

    default:
        echo "Hey";
        break;
}
