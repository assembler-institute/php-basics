<?php
print 'Hello world <br>';

$name = 'Miquel';

print $name . "<br>";
print $name . " Abella" . "<br>";

function replaceTextInString($textToReplace, $newText, $str)
{
    $newStr = str_replace($textToReplace, $newText, $str);
    return $newStr;
}

echo replaceTextInString('Abella', 'Garcia', 'Miquel Abella') . '<br>';

function replaceTextInStringNotCaseSensitive($textToReplace, $newText, $str)
{
    $newStr = str_ireplace($textToReplace, $newText, $str);
    return $newStr;
}

echo replaceTextInStringNotCaseSensitive('abella', 'garcia', 'Miquel Abella') . '<br>';

function repeatText($text, $times)
{
    return str_repeat($text, $times);
}

echo repeatText('Miquel', 4) . '<br>';

function getLength($text)
{
    return strlen($text);
}

echo getLength('Miquel') . '<br>';

function findFirstOcurrencePosition($text, $textToFind)
{
    return strpos($text, $textToFind);
}

echo findFirstOcurrencePosition('Miquel', 'q') . '<br>';


function capitalize($text)
{
    return strtoupper($text);
}

echo capitalize('Miquel') . '<br>';

function convertToLowerCase($text)
{
    return strtolower($text);
}

echo convertToLowerCase('MIQUEL') . '<br>';

function findValueOfPosition($text, $position)
{
    return substr($text, $position, 1);
}

echo findValueOfPosition('Miquel', 3) . '<br>';
