<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        color: #18978F;
        margin-bottom: 0;
    }

    span {
        margin-left: 1.5em;
    }

    h4 {
        margin-top: 0;
        font-weight: bold;
        font-size: 16;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>
<?php

echo "<h4>&dollar;days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];</h4><br>";

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

echo "<h2>For</h2>";

echo '<pre><h4>
for ($i = 0; $i < count($days); $i++) {
    echo "Today is $days[$i].";
}
</h4></pre>';
for ($i = 0; $i < count($days); $i++) {
    echo "<p>Today is $days[$i].</p>";
}

echo "<br><h2>For Each</h2>";

echo '<pre><h4>
foreach ($days as $day) {
    echo "Today is $day.";
}
</h4></pre>';

foreach ($days as $day) {
    echo "<p>Today is $day.</p>";
}

echo "<br><h2>While</h2>";

echo '<pre><h4>
$i = 0;

while ($i < count($days)) {
    echo "Today is $days[$i].";
    $i++;
}
</h4></pre>';

$i = 0;
while ($i < count($days)) {
    echo "<p>Today is $days[$i].</p>";
    $i++;
}

echo "<br><h2>Do While</h2>";

echo '<pre><h4>
$i = 0;

do {
    echo "Today is $days[$i].";
    $i++;
} while ($i < count($days));
</h4>
</pre>';

$i = 0;
do {
    echo "<p>Today is $days[$i].</p>";
    $i++;
} while ($i < count($days));
