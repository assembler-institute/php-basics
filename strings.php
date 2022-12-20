<?php
$a = 1;
$initialText = "Starting with PHP";
$secondText = "Hello World! This is my first PHP page.";

print "<h1 style='color: red;'>Strings</h1>";
print "This is my first excercise with Strings<br />";
echo "This is my first excercise with Strings that implement <b>", $b=1, "</b> inline variable<br />";
print "This is my first excercise with Strings that implement previously declared <b>$a</b> variable<br />";

echo "<h2 style='color: red;'>Methods</h2>", "<h3 style='color: red;'>Replace case sensitive: str_replace(old,new,str)</h3>";
echo "<p>Initial Text: <b>$initialText</b></p>";
$initialText = str_replace("Starting with", "I'm learning ", $initialText);
echo "Replaced text: <b>$initialText</b>";


print "<h3 style='color: red;'>Replace case insensitive: str_ireplace(old,new,str)</h3>";
echo "<p>Initial Text: <b>$secondText</b></p>";
$secondText = str_ireplace("hello world!", "How are you? ", $secondText);
echo "Replaced text: <b>$secondText</b>";


print "<h3 style='color: red;'>Write text n times: str_repeat(str,times)</h3>";
$nTimes = str_repeat("Hello guy! ", 10);
print $nTimes;

print "<h3 style='color: red;'>String length: strlen(str)</h3>";
print "<p>Text: <b>$initialText</b></p>";
echo "<p>Length: <b>", strlen($initialText) ,"</b></p>";


print "<h3 style='color: red;'>String position: strpos(text,str)</h3>";
print "<p>Text: <b>$secondText</b> and where is positioned -PHP-?</p>";
echo "<p>Position: <b>", strpos($secondText, "PHP") ,"</b></p>";

print "<h3 style='color: red;'>Capitalize string: ucfirst (str)</h3>";
print "<p>Text: <b>hello world!</b></p>";
echo "<p>Capitalized: <b>", ucfirst("hello world!") ,"</b></p>";


print "<h3 style='color: red;'>String to lowercase: strtolower(str)</h3>";
print "<p>Text: <b>HELLO World!</b></p>";
echo "<p>To Lowercase: <b>", strtolower("HELLO World!") ,"</b></p>";


print "<h3 style='color: red;'>Substring in another string: substr(str)</h3>";
print "<p>Text: <b>Hello World! How are you?</b></p>";
echo "<p>Substring: <b>", substr("Hello World! How are you?", 13) ,"</b></p>";