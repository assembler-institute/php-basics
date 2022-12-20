<style>
    body {
        font-family: Georgia, 'Times New Roman', Times, serif;
        padding: 2em;
    }

    h2 {
        margin-top: 2em;
        color: #18978F;
    }

    h4 {
        font-weight: bold;
        font-size: 16;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>

<?php

echo "<h2>Print</h2>";
echo "<h4>print 'Hi!';</h4>";
print "Hi!<br>";

echo '<pre><h4>
$morning = "Good Morning!";

print $morning;
</h4></pre>';
$morning = "Good Morning!";

print $morning;

echo "<h4>print 'Hi!'.&dollar;morning;</h4>";
print "Hi!" . $morning;

echo "<h2>Replace</h2>";

echo '<pre><h4>
function replaceString($search, $replace, $subject)
{
    return str_replace($search, $replace, $subject);
}

&dollar;resultReplaced = replaceString("Morning", "Night", "Good Morning");
</h4></pre>';

function replaceString($search, $replace, $subject)
{
    return str_replace($search, $replace, $subject);
}

$resultReplaced = replaceString('Morning', 'Night', 'Good Morning');
echo $resultReplaced;

echo '<pre><h4>
function replaceStringNoSensitive($search, $replace, $subject)
{
    return str_ireplace($search, $replace, $subject);
}

$resultReplacedNoSensitive = replaceStringNoSensitive("morning", "night", "Good Morning");
</h4></pre>';

function replaceStringNoSensitive($search, $replace, $subject)
{
    return str_ireplace($search, $replace, $subject);
}

$resultReplacedNoSensitive = replaceStringNoSensitive('morning', 'night', 'Good Morning');
echo $resultReplacedNoSensitive;

echo "<h2>Repeat</h2>";

echo '<pre><h4>
function repeat($str, $times)
{
    return str_repeat($str, $times);
}

$resultRepeat = repeat("Hi!", 7);
</h4></pre>';
function repeat($str, $times)
{
    return str_repeat($str, $times);
}

$resultRepeat = repeat("Hi!", 7);

echo $resultRepeat;

echo "<h2>Length</h2>";

echo '<pre><h4>
function lengthStr($str)
{
    return strlen($str);
}

$resultLength = lengthStr("Good Morning!");
</h4></pre>';
function lengthStr($str)
{
    return strlen($str);
}

$resultLength = lengthStr("Good Morning!");

echo $resultLength;

echo "<h2>Position First Occurrence</h2>";

echo '<pre><h4>
function position($string, $tofind)
{
    return strpos($string, $tofind);
}

$resultPosition = position("Good Morning!", "M");
</h4></pre>';

function position($string, $toFind)
{
    return strpos($string, $toFind);
}

$resultPosition = position("Good Morning!", "M");

echo $resultPosition;

echo "<h2>Uppercase</h2>";

echo '<pre><h4>
function toUpperC($str)
{
    return strtoupper($str);
}

$resultUpp = toUpperC("Good Morning!");
</h4></pre>';

function toUpperC($str)
{
    return strtoupper($str);
}

$resultUpp = toUpperC("Good Morning!");

echo $resultUpp;

echo "<h2>Lowercase</h2>";

echo '<pre><h4>
function toLowerC($str)
{
    return strtolower($str);
}

$resultLow = toLowerC("Good Morning!");
</h4></pre>';
function toLowerC($str)
{
    return strtolower($str);
}

$resultLow = toLowerC("Good Morning!");

echo $resultLow;

echo "<h2>Obtain a text substring</h2>";

echo '<pre><h4>
function substring($str, $position)
{
    return substr($str, $position);
}

$resultSubstring = substring("Good Morning!", 5);
</h4></pre>';
function substring($str, $position)
{
    return substr($str, $position);
}

$resultSubstring = substring("Good Morning!", 5);

echo $resultSubstring;
