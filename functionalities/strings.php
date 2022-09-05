<?php
print '<br>--------------------< Simple String Text >--------------------<br>';
echo 'Hi, Im String Text';

echo '<br>';
print '<br>--------------------< Varible String>--------------------<br>';
$string = 'Im a variable that contain String';
echo $string;

echo '<br>';
print '<br>--------------------< Concatenate String>--------------------<br>';
echo "Concatenate previous string that says: ". $string; 

echo '<br>';
print '<br>--------------------< Replace String (Case sensitive) >--------------------<br>';
$abc='Replace the word cat';
echo str_replace('cat', 'dog', $abc);

echo '<br>';
print '<br>--------------------< Replace String (NOT Case sensitive) >--------------------<br>';
$ac='Replace the word Notsensitive';
echo str_ireplace('notsensitive', 'NOTSENSITIVE', $ac);


echo '<br>';
print '<br>--------------------< Repeat String N times >--------------------<br>';
$hello='Hello';
echo '<b>Repeat Hello 5x:</b> '.str_repeat($hello, 5);


echo '<br>';
print '<br>--------------------< String Length >--------------------<br>';
$helloDog='Hello Dog';
echo '<b>The variable HelloDog has:</b> '.strlen($helloDog). ' characters.';

echo '<br>';
print '<br>--------------------< String Position Characters >--------------------<br>';
$cat='Cat';
echo strpos($cat, 't');

echo '<br>';
print '<br>--------------------< String Uppercase >--------------------<br>';
$dummy='dumppytext';
echo strtoupper($dummy);

echo '<br>';
print '<br>--------------------< String Lowercase >--------------------<br>';
$dummy2='DuMMyTExt';
echo strtolower($dummy2);

echo '<br>';
print '<br>--------------------< String Substring >--------------------<br>';
$subs='Substringme';
echo substr($subs, 9); 
?>