<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        color: #18978F;
        margin-top: 2em;
    }
</style>
<?php
echo "<h4>&dollar;greeting= 'Hi!';</h4>";
echo "<h4>&dollar;morning= 'Good Morning!';</h4>";
echo "<h4>&dollar;days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];</h4><br>";

$greeting = "Hi!";
$morning = "Good Morning!";
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

echo "<h2>echo</h2>";
echo "<h4>echo &dollar;greeting, &dollar;morning;</h4>";
echo $greeting, $morning;
echo "<h2>print</h2>";
echo "<h4>print &dollar;greeting;</h4>";
print "$greeting";
echo "<h2>print_r</h2>";
echo "<h4>print_r(&dollar;days);</h4>";
print_r($days);
