<?php
$date = new DateTime();
echo '<br>Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.</br>';

if ($date->format('w') === 1) {
    echo 'We are on Monday';
}
echo '<br>Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.</br>';

if ($date->format('m') === 10) {
    echo 'We are in October';
} else {
    echo $date->format('F');
}

echo '<br>If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”</br>';

if ($date->format('i') < 10) {
    echo 'the current minute is less than 10';
} elseif ($date->format('i') > 15) {
    echo 'the current minute is more than 15';
} else {
    echo 'does not meet any conditions';
}
echo '<br>Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.</br>';
switch ($date->format('w')) {
    case 1:
        echo 'Luuuuuuuuunes';
        break;
    case 2:
        echo 'Maaaaartes';
        break;
    case 3:
        echo 'Mieeercoles';
        break;
    case 4:
        echo 'Jueeves ;)';
        break;
    case 5:
        echo 'Viernes :D';
        break;
    case 6:
        echo 'Sabaadoo0o0o';
        break;
    case 7:
        echo 'Domingo.';
        break;
    default:
        echo '?¿¿? qué día es?';
}
