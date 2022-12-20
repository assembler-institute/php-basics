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

echo "<h2>Absolute Value</h2>";

echo '<pre><h4>
function absolute($num)
{
    return abs($num);
};

$result = absolute(5);
</h4></pre>';

function absolute($num)
{
    return abs($num);
};

$resultAbs = absolute(5);
echo $resultAbs;

echo "<h2>Rounded Value Up</h2>";

echo '<pre><h4>
function rounded($num)
{
    return ceil($num);
};

$resultRound = rounded(1.3);
</h4></pre>';

function rounded($num)
{
    return ceil($num);
};

$resultRound = rounded(1.3);
echo $resultRound;

echo "<h2>Highest value</h2>";

echo '<pre><h4>
function highest($arr)
{
    return max($arr);
}

$arrNums = [2, 5, 6, 9, 3, 0, 4];
$resultHigh = highest($arrNums);
</h4></pre>';
function highest($arr)
{
    return max($arr);
}

$arrNums = [2, 5, 6, 9, 3, 0, 4];
$resultHigh = highest($arrNums);
echo $resultHigh;

echo "<h2>Lowest Value</h2>";

echo '<pre><h4>
function lowest($arr)
{
    return min($arr);
}

$arrNums = [2, 5, 6, 9, 3, 1, 4];
$resultLow = lowest($arrNums);
</h4></pre>';

function lowest($arr)
{
    return min($arr);
}

$arrNums = [2, 5, 6, 9, 3, 1, 4];
$resultLow = lowest($arrNums);
echo $resultLow;


echo "<h2>Random Number</h2>";

echo '<pre><h4>
function random($min, $max)
{
    return rand($min, $max);
}

$resultRand = random(1, 10);
</h4></pre>';
function random($min, $max)
{
    return rand($min, $max);
}

$resultRand = random(1, 10);
echo $resultRand;
