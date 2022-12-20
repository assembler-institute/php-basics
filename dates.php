<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        color: #18978F;
    }

    h3 {
        color: #DF7861;
    }
</style>
<?php

echo "<h4>&dollar;today = new DateTime();</h4>";

$today = new DateTime();

echo "<h2>Format 'Y-m-d'</h2>";
echo "<h4>echo &dollar;today -> format('Y-m-d');</h4>";

echo $today->format('Y-m-d');

echo "<h2>Current date any format</h2>";
echo "<h3>(d-m-y)</h3>";

echo $today->format('d-m-y');

echo "<h3>(d-m-Y)</h3>";

echo $today->format('d-m-Y');

echo "<h3>(d-M-Y)</h3>";

echo $today->format('d-M-Y');

echo "<h3>(D-m-Y)</h3>";

echo $today->format('D-m-Y');

echo "<h2>Current day</h2>";
echo "<h4>echo &dollar;today -> format('d'), &dollar;today -> format('D');</h4>";
echo $today->format('d'), $today->format('D');

echo "<h2>Current month</h2>";
echo "<h4>echo &dollar;today -> format('m');</h4>";
echo $today->format('m');

echo "<h2>Current minute</h2>";
echo "<h4>echo &dollar;today -> format('i');</h4>";
echo $today->format('i');
