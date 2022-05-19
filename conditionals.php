<?php

// Conditionals in PHP


// Condition to see if today is Monday.
$today = new dateTime();

if ($today->format('N') == 1) {
    echo 'Today is Monday.';
} else {
    echo 'Today is not Monday.';
}

echo '<br><br>';

// Condition to see if current month is October.
if ($today->format('n') == 10) {
    echo 'We are in October.';
} else {
    echo 'We are not in October.';
}

echo '<br><br>';

// Double condition evaluating if current minute is less than 10, and also if it's greater than 15.
$min = $today->format('i');
if ($min < 10) {
    echo 'the current minute is less than 10';
} else if ($min > 15) {
    echo 'the current minute is more than 15';
} else {
    echo 'does not meet any conditions';
}

echo '<br><br>';

// Switch structure for different message each day of the week.
$currentDay = $today->format('N');
echo '<br> current day as digit is: ';
echo gettype($currentDay);
echo '<br><br>';
switch ($currentDay) {
    case 1:
        echo 'Mondays are so blah.';
        break;
    case 2:
        echo "What? It's only Tuesday.";
        break;
    case 3:
        echo "It's Wednesday. We're halfway there.";
        break;
    case 4:
        echo "We're almost to Friday. Woo-hoo!";
        break;
    case 5:
        echo "Is today Friday already? It's Friday!";
        break;
    case 6:
        echo 'What to do with my Saturday?';
        break;
    case 7:
        echo "Oh...tomorrow's Monday.";
        break;
}   

echo '<br><br>';



echo '<br><br>';