<?php
print 'Hello world <br>';

$name = 'Miquel';

print $name . "<br>";
print $name . " Abella" . "<br>";

// replace text of string

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

// repeat n times a string

function repeatText($text, $times)
{
    return str_repeat($text, $times);
}

echo repeatText('Miquel', 4) . '<br>';

// get length of a string

function getLength($text)
{
    return strlen($text);
}

echo getLength('Miquel') . '<br>';

// find first occurrence of string

function findFirstOcurrencePosition($text, $textToFind)
{
    return strpos($text, $textToFind);
}

echo findFirstOcurrencePosition('Miquel', 'q') . '<br>';

// capitalize all string

function capitalize($text)
{
    return strtoupper($text);
}

echo capitalize('Miquel') . '<br>';

// lowercase string

function convertToLowerCase($text)
{
    return strtolower($text);
}

echo convertToLowerCase('MIQUEL') . '<br>';

// find value of a string given the position

function findValueOfPosition($text, $position)
{
    return substr($text, $position, 1);
}

echo findValueOfPosition('Miquel', 3) . '<br>';
