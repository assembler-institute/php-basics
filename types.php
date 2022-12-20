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

echo "<h2>Boolean</h2>";

echo "<h4>&dollar;isValid = TRUE;</h4>";
$isValid = TRUE;
echo $isValid;

echo "<h4>&dollar;isNotValid = FALSE;</h4>";
$isNotValid = FALSE;
echo $isNotValid;

echo "<h2>Integer</h2>";
echo "<h4>&dollar;num = 2022;</h4>";
$num = 2022;
echo $num;

echo "<h2>Float</h2>";
echo "<h4>&dollar;floatNum = 2.35;</h4>";
$floatNum = 2.35;
echo $floatNum;

echo "<h2>String</h2>";
echo "<h4>&dollar;greeting= 'Hi!';</h4>";
$greeting = "Hi!";
echo $greeting;

echo "<h2>Array</h2>";
echo "<h4>&dollar;days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');</h4>";
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
print_r($days);

echo "<h2>Object</h2>";
echo '<pre><h4>
$days = (object) [
    "Monday" => 1,
    "Tuesday" => 2,
    "Wednesday" => 3,
    "Thursday" => 4,
    "Friday" => 5,
    "Saturday" => 6,
    "Sunday" => 7,
];
</h4></pre>';
$days = (object) [
    'Monday' => 1,
    'Tuesday' => 2,
    'Wednesday' => 3,
    'Thursday' => 4,
    'Friday' => 5,
    'Saturday' => 6,
    'Sunday' => 7,
];

print_r($days);

echo "<h2>NULL</h2>";

echo "<h4>&dollar;isNull = NULL;</h4>";
$isNull = NULL;
echo $isNull;
