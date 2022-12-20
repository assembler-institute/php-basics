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

echo "<h2>Types</h2>";

echo '<pre>
<h4>
$arrStr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

$arrNum = [1, 4, 6, 1.4, 5.9, 5, 7];

$arrMult = [1, 4, 6, [4, 9, 4]];
</h4>
</pre>';
$arrStr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$arrNum = [1, 4, 6, 1.4, 5.9, 5, 7];
$arrMult = [1, 4, 6, [4, 9, 4]];

echo "<h2>Length</h2>";

echo '<pre><h4>
function lengthArr($arr)
{
    return count($arr);
}

$resultLengthA = lengthArr($arrStr);
</h4></pre>';

function lengthArr($arr)
{
    return count($arr);
}

$resultLengthA = lengthArr($arrStr);

echo $resultLengthA;

echo "<h2>Combination Two Arrays</h2>";

echo '<pre><h4>
function combination($arr1, $arr2)
{
    return array_combine($arr1, $arr2);
}

$resultCombination = combination($arrNum, $arrStr);
</h4></pre>';

function combination($arr1, $arr2)
{
    return array_combine($arr1, $arr2);
}

$resultCombination = combination($arrNum, $arrStr);

print_r($resultCombination);

echo "<h2>Last Element</h2>";

echo '<pre><h4>
function lastEl($arr)
{
    return end($arr);
}

$resultLastEl = lastEl($arrNum);
</h4></pre>';

function lastEl($arr)
{
    return end($arr);
}

$resultLastEl = lastEl($arrNum);

echo $resultLastEl;

echo "<h2>Add Element</h2>";

echo '<pre><h4>
function addElement($arr, $elAdd)
{
    return array_push($arr, $elAdd);
    return $arr;
}

$resultAddEl = addElement($arrStr, "Monday");
</h4></pre>';

function addElement($arr, $elAdd)
{
    array_push($arr, $elAdd);
    return $arr;
}

$resultAddEl = addElement($arrStr, "Monday");

print_r($resultAddEl);
